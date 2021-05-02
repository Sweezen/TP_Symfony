<?php

namespace App\DataFixtures;

use App\Entity\BlogPost;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();
        // create 20 products! Bam!
        for ($i = 0; $i < 20; $i++) {
            $article = new BlogPost();
            $article->setTitle('Title '.$i);
            $article->setSubtitle('Subtitle '.$i);
            $article->setAuthor('Author'.$i);
            $article->setImage($faker->imageUrl());
            $article->setCreatedAt($faker->datetime);
            $article->setBody($faker->realText(180));
            $manager->persist($article);

        }

        $manager->flush();
    }
}
