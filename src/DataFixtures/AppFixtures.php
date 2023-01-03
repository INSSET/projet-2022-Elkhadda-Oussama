<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use http\Client;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
         $client = new Client();
         $client->setUserIdentifier('oussama@gmail.com');
         $client->setRoles(['ROLE_ADMIN']);
         $client->setPassword('123');
         $manager->persist($client);

        $manager->flush();
    }
}
