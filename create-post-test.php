<?php

require_once "./vendor/autoload.php";
/** @var EntityManager $entityManager */
require_once "bootstrap.php";

$createPost = new \App\UseCases\CreatePost($entityManager);
$createPost->execute("Post test","Description post test");
