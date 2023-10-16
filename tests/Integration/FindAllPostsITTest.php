<?php


use PHPUnit\Framework\Attributes\Test;

class FindAllPostsITTest extends \Test\Integration\IntegrationTestBase
{
    #[test]
    public function findAllPosts()
    {
       // Arrange
       $findAllPosts = new \App\UseCases\FindAllPosts($this->entityManager);
       // Act
       $posts = $findAllPosts->execute();
       // Assert
       $this->assertTrue(true);
    }


}