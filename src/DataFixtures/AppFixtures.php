<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Client;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private $pswcrypter;
    public function __construct(UserPasswordHasherInterface $pswcrypter){
        $this->pswcrypter = $pswcrypter;
    }

    public function load(ObjectManager $manager): void{
         $client = new Client();
         $psworigin = "admin123";
         $pswdecrypter= $this->pswcrypter
             ->hashPassword($client,$psworigin);
         $client->setEmail('oussama@gmail.com');
         $client->setRoles(['ROLE_ADMIN']);
         $client->setPassword($pswdecrypter);
         $manager->persist($client);

        $manager->flush();
    }
}
