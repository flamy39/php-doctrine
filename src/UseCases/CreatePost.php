<?php

namespace App\UseCases;

use App\Entity\Post;
use Doctrine\ORM\EntityManager;

class CreatePost {

    private EntityManager $entityManager;

    // Injection de dépendance

    /**
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function execute(string $titre, string $description) {
        $post = new Post();
        $post->setTitre($titre);
        $post->setDescription($description);

        $this->entityManager->persist($post);
        $this->entityManager->flush();
    }

}