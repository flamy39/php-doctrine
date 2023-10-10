<?php

namespace Test\Integration;

use App\Entity\Post;
use App\UseCases\CreatePost;
use PHPUnit\Framework\Attributes\Test;

/**
 * @group integration
 */
class CreatePostITest extends IntegrationTestBase
{
     #[test]
    public function Test_Create_Post() {
        // Arrange
        $titre = "Post 1";
        $description = "Description post 1";
        $createPost = new CreatePost($this->entityManager);
        // Act
        $createPost->execute($titre,$description);
        // Assert
       $repository = $this->entityManager->getRepository(Post::class);
       $post = $repository->findOneBy(['titre'=>"Post 1"]);
       $this->assertNotNull($post);
       $this->assertEquals("Post 1",$post->getTitre());

    }

}