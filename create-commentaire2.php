<?php

use App\Commentaire;

require_once "bootstrap.php";

// Récupération du post id=1
$post = $entityManager->find('App\Post', 1);

// Création d'un commentaire
$commentaire = new Commentaire();
$commentaire->setContenu("Mon commentaire 3");

$post->addCommentaire($commentaire);

// Persistance du commentaire
$entityManager->persist($commentaire);
$entityManager->flush();