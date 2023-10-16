<?php

namespace App\UseCases;

use App\Entity\Post;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;

class CreatePost {

    private EntityManagerInterface $entityManager;

    // Injection de dépendance

    /**
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
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