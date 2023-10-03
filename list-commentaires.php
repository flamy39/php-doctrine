<?php

require_once "bootstrap.php";

// Lister tous les commentaires d'un post donné par son id
// Utiliser le QueryBuilder de doctrine

// Création du QueryBuilder
$queryBuilder = $entityManager->createQueryBuilder();
// Création de la requête
$commentaires = $queryBuilder->select('c')
    ->from('App\Commentaire', 'c')
    ->where('c.post = :post')
    ->setParameter('post', 1)
    ->getQuery()
    ->getResult();
echo $queryBuilder->getDQL() . "\n";

// Affichage des commentaires
foreach ($commentaires as $commentaire) {
    echo $commentaire->getId() . "\n";
    echo $commentaire->getContenu() . "\n";
    echo "\n";
}

// Rechercher les ids des commentaires d'un post donné par son id
$queryBuilder = $entityManager->createQueryBuilder();
$commentairesId = $queryBuilder->select('c.id')
    ->from('App\Commentaire', 'c')
    ->where('c.post = :post')
    ->setParameter('post', 1)
    ->getQuery()
    ->getScalarResult();

// Affichage des ids des commentaires
foreach ($commentairesId as $commentaireId) {
    echo $commentaireId['id'] . "\n";
}





