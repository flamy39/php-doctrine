<?php

use Doctrine\Common\DataFixtures\Executor\ORMExecutor;
use Doctrine\Common\DataFixtures\Purger\ORMPurger;

require "bootstrap.php";

// Charger les fixtures
$loader = new \Doctrine\Common\DataFixtures\Loader();
$loader->loadFromDirectory('src/Fixtures');

// Exécuter les fixtures
$executor = new ORMExecutor($entityManager,new ORMPurger());
$executor->execute($loader->getFixtures());
