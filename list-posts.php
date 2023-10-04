<?php

require_once "bootstrap.php";

// Récupération de tous les posts
$repository = $entityManager->getRepository('App\Entity\Post');
$posts = $repository->findAll();

// Affichage des posts
foreach ($posts as $post) {
    echo $post->getId() . "\n";
    echo $post->getTitre() . "\n";
    echo $post->getDescription() . "\n";
    echo "\n";
}