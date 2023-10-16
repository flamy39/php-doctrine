<?php

namespace App\UseCases;

use App\Entity\Post;
use Doctrine\ORM\EntityManager;

class FindAllPosts {
    private EntityManager $entityManager;

    /**
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager) {
        $this->entityManager = $entityManager;
    }

    public function execute() : array {
        $repository = $this->entityManager->getRepository(Post::class);
        $posts = $repository->findAll();
        return $posts;
    }
}