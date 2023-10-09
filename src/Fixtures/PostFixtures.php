<?php

namespace App\Fixtures;

use App\Entity\Post;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class PostFixtures implements \Doctrine\Common\DataFixtures\FixtureInterface
{

    /**
     * @inheritDoc
     */
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create("fr_FR");
        for($i=0; $i<10;$i++) {
            $post = new Post();
            $post->setTitre($faker->sentence(6));
            $post->setDescription($faker->paragraph(4));

            $manager->persist($post);
        }
        $manager->flush();
    }
}