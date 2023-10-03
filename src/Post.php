<?php

namespace App;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'post')]
class Post
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private ?int $id;
    #[ORM\Column(type: 'string', length: 255)]
    private ?string $titre;
    #[ORM\Column(type: 'text')]
    private ?string $description;

    #[ORM\OneToMany(mappedBy: 'post',targetEntity: Commentaire::class,cascade: ['persist', 'remove'])]
    private Collection $commentaires;

    public function __construct()
    {
        $this->commentaires = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitre() : string
    {
        return $this->titre;
    }

    /**
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }

    /**
     * @param string $titre
     */
    public function setTitre(string $titre) : void
    {
        $this->titre = $titre;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description) : void
    {
        $this->description = $description;
    }

    // Ajouter un commentaire
    public function addCommentaire(Commentaire $commentaire): void
    {
        $this->commentaires[] = $commentaire;
        $commentaire->setPost($this);
    }
}