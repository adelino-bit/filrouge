<?php

namespace App\DataFixtures;

use App\Entity\Profil;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ProfilFixtures extends Fixture
{
    public const PROFIL_ADMIN_REFERENCE = 'ADMIN';
    public const PROFIL_FORMATEUR_REFERENCE = 'FORMATEUR';
    public const PROFIL_APPRENANT_REFERENCE = 'APPRENANT';
    public const PROFIL_CM_REFERENCE = 'CM';

    public function load(ObjectManager $manager)
    {
       
        $profilAd = new Profil();
        $profilAd -> setLibelle("ADMIN");
                     
        $this->addReference(self::PROFIL_ADMIN_REFERENCE, $profilAd);
        
            
        $profilAppre = new Profil();
        $profilAppre -> setLibelle("APPRE");
                         
        $this->addReference(self::PROFIL_APPRENANT_REFERENCE, $profilAppre);
       

        $profilFormateur = new Profil();
        $profilFormateur -> setLibelle("FORMATEUR");
                         
        $this->addReference(self::PROFIL_FORMATEUR_REFERENCE, $profilFormateur);
        

        $profilCM = new Profil();
        $profilCM -> setLibelle("CM");
                 
        $this->addReference(self::PROFIL_CM_REFERENCE, $profilCM);
        

        $manager -> persist($profilAd);
        $manager -> persist($profilFormateur);
        $manager -> persist($profilAppre);
        $manager -> persist($profilCM);

        $manager->flush();
    }
}
