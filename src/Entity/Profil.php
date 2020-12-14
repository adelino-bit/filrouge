<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ProfilRepository;
use ApiPlatform\Core\Annotation\ApiFilter;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\BooleanFilter;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass=ProfilRepository::class)
 * @ApiFilter(booleanFilter::class, properties={"Archivage"})
 * 
 *  @ApiResource(
 *     normalizationContext={"groups"={"profil:read"}},
 *     routePrefix="/admin",
 *     attributes={
 *          "security"="is_granted('ROLE_ADMIN')",
 *          "security_message"= "Vous n'avez pas acces à cette ressource"
 *     },
 *     collectionOperations={
 *          "GET","POST"
 *       },
 *      itemOperations={
 *          "get_profil"={
 *              "method"="GET",
 *              "path"="/profils/{id}",
 *              "requirements"={"id"="\d+"}
 *          },
 *          "update_profil"={
 *              "method"="PUT",
 *              "path"="/profils/{id}",
 *              "requirements"={"id"="\d+"}
 *          },
 *          "get_profil_users"={
 *              "method"="GET",
 *              "path"="/profils/{id }/users",
 *              "requirements"={"id"="\d+"},
 *              "defaults" = {"id"=null},
 *              "normalization_context"={"groups"={"profil:read","profil:read:all"}}
 *          },
 *          "delete_profil"={
 *              "method"="DELETE",
 *              "path"="/profils/{id}",
 *              "requirements"={"id"="\d+"}
 *          }
 *      }
 * )
 * @UniqueEntity(
 *      fields={"libelle"},
 *      message="Ce libellé existe déjà"
 * )
 */
class Profil
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     *  @Groups({"profil:read"})

     */
    private $libelle;

    /**
     * @ORM\OneToMany(targetEntity=User::class, mappedBy="profil")
     * @ApiSubresource()
     */
    private $users;

    public function __construct()
    {
        $this->users = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
            $user->setProfil($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->removeElement($user)) {
            // set the owning side to null (unless already changed)
            if ($user->getProfil() === $this) {
                $user->setProfil(null);
            }
        }

        return $this;
    }
}
