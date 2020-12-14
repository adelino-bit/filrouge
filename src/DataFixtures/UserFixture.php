<?php

namespace App\DataFixtures;

use App\Entity\Cm;
use Faker\Factory;
use App\Entity\User;
use App\Entity\Admin;
use App\Entity\Apprenant;
use App\Entity\Formateur;
use App\DataFixtures\ProfilFixtures;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixture extends Fixture
{
    
        
    private $password ;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this -> password = $encoder;
    }
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');
        for ($i=1; $i <20 ; $i++) { 
            if($i<5){
                $users= new Admin();
                $users -> setProfil($this->getReference(ProfilFixtures::PROFIL_ADMIN_REFERENCE));
            }
            elseif($i<10){
                $users= new Formateur();
                $users-> setProfil($this->getReference(ProfilFixtures::PROFIL_FORMATEUR_REFERENCE));
            }
            elseif($i<15){
                $users= new Apprenant();
                $users-> setProfil($this->getReference(ProfilFixtures::PROFIL_APPRENANT_REFERENCE));
            }
           else{
                $users= new Cm();
                $users-> setProfil($this->getReference(ProfilFixtures::PROFIL_CM_REFERENCE));
            }
        
         $users-> setPrenom($faker -> firstName)
                -> setNom($faker -> lastName)
                ->setUsername($faker->lastName)
                -> setEmail($faker -> email)
                -> setAvatar($faker -> imageUrl(300,300))
                ->setArchivage(0)
                ->setGenre($faker->randomElement(['F','M']))
                ->setStatut("Actif");
         $pass  =  $this -> password -> encodePassword($users, "admin");
         $users-> setPassword($pass);

         if($users=='APPRENANT'){
            $users->setStatut($faker->randomElement(['Actif','Attente','Renvoyé']));
                 
        }

    
       
         $manager -> persist($users);

        }

        $manager->flush();
    }
}
