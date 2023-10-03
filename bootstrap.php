<?php

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

require_once "vendor/autoload.php";

// Création de la configuration de Doctrine
// Utilisation des attributs
$config = ORMSetup::createAttributeMetadataConfiguration(
    paths: array(__DIR__."/src"),
    isDevMode: true,
);
// Configuration de la connexion à la base de données
$connection = DriverManager::getConnection([
    'driver' => 'pdo_mysql',
    'host' => 'localhost',
    'dbname' => 'test',
    'user' => 'root',
    'password' => ''
], $config);

// Création de l'entity manager
$entityManager = EntityManager::create($connection, $config);



