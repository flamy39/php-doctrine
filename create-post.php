<?php

use App\Commentaire;
use App\Post;
use Doctrine\ORM\EntityManager;

/** @var EntityManager $entityManager */
require "bootstrap.php";

// Création d'un post
$post = new Post();
$post->setTitre("Mon post 3");
$post->setDescription("Contenu de mon post 3");

// Création d'un commentaire
$commentaire = new Commentaire();
$commentaire->setContenu("Mon premier commentaire");
$post->addCommentaire($commentaire);

$entityManager->persist($post);
$entityManager->flush();
