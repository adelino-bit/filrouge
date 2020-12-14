<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\UserRepository;
use Doctrine\ORM\Mapping\InheritanceType;
use ApiPlatform\Core\Annotation\ApiFilter;
use Doctrine\ORM\Mapping\DiscriminatorMap;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping\DiscriminatorColumn;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Security\Core\User\UserInterface;


/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="type", type="string")
 * @ORM\DiscriminatorMap({"admin" = "Admin", "formateur" = "Formateur", "apprenant" = "Apprenant", "cm" = "Cm", "user"="User"})

 * @ApiResource(
 *      attributes={"pagination_items_per_page"=10},
 *      normalizationContext={"groups"={"user:read"}},
 *      routePrefix="/admin",
 *       collectionOperations={
 *          "get_users"={
 *              "method"="GET",
 *              "path"="/users",
 *              "security"="is_granted('ROLE_ADMIN')",
 *              "security_message"= "Vous n'avez pas acces à cette ressource",
 *          },
 *          "add_users"={
 *              "method"="POST",
 *              "path"="/users",
 *              "security"="is_granted('ROLE_ADMIN')",
 *              "security_message"= "Vous n'avez pas acces à cette ressource",
 *              "route_name"="add_user",
 *              "defaults"={"id"=null}
 *          }    
 *      },
 *      itemOperations={
 *          "get_user"={
 *               "method"="GET",
 *               "path"="/users/{id}",
 *               "security"="is_granted('ROLE_ADMIN')",
 *               "security_message"= "Vous n'avez pas acces à cette ressource",
 *          },
 *           "update"={
 *                 "method"="PUT",
 *                 "path"="/users/{id}",
 *                 "security"="is_granted('ROLE_ADMIN')",
 *                 "security_message"= "Vous n'avez pas acces à cette ressource",
 *         }
 * 
 * }
 * 
 *    
 *      
 *          
 * )
 * 
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"user:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     * @Groups({"user:read"})
     */
    private $username;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     * @Assert\NotBlank(message="Veuillez renseigné le mot de passe ")
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Veuillez renseigné le prénom")
     * @Groups({"user:read"})
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Veuillez renseigné le nom ")
     * @Groups({"user:read"})
     */
    private $nom;

    /**
     * @ORM\Column(type="blob")
     * @Groups({"user:read"})
     */
    private $avatar;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"user:read"})
     */
    private $statut;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"user:read"})
     */
    private $email;

    /**
     * @ORM\ManyToOne(targetEntity=Profil::class, inversedBy="users")

     */
    private $profil;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $archivage;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $genre;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getAvatar()
    {
        return null;
        return $this->avatar;
    }

    public function setAvatar($avatar): self
    {
        $this->avatar = $avatar;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getProfil(): ?Profil
    {
        return $this->profil;
    }

    public function setProfil(?Profil $profil): self
    {
        $this->profil = $profil;

        return $this;
    }

    public function getArchivage(): ?bool
    {
        return $this->archivage;
    }

    public function setArchivage(bool $archivage): self
    {
        $this->archivage = $archivage;

        return $this;
    }

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(string $genre): self
    {
        $this->genre = $genre;

        return $this;
    }
}
