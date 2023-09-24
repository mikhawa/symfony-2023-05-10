<?php

namespace App\Entity;

use App\Repository\CommentaireRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentaireRepository::class)]
class Commentaire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(options: ["unsigned" => true])]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $CommentaireTitle = null;

    #[ORM\Column(length: 800)]
    private ?string $CommentaireText = null;

    // pour que la date actuelle soit insérée automatiquement
    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true,options: ["default" => "CURRENT_TIMESTAMP"])]
    private ?\DateTimeInterface $CommentaireDateCreate = null;

    // Pour que la relation soit bidirectionnelle, il faut ajouter une propriété targetEntity et inversedBy
    #[ORM\ManyToOne(targetEntity: Article::class, inversedBy: 'Commentaires')]
    private ?Article $CommentaireManyToOneArticle = null;

    // pour que la valeur par défaut soit false
    #[ORM\Column(type: Types::BOOLEAN, options: ["default" => false])]
    private ?bool $CommentaireIsPublished = null;

    #[ORM\ManyToOne(inversedBy: 'commentaires')]
    private ?Utilisateur $utilisateur = null;

    // Pour que la date actuelle soit insérée automatiquement dans le formulaire
    public function __construct()
    {
        $this->CommentaireDateCreate = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCommentaireTitle(): ?string
    {
        return $this->CommentaireTitle;
    }

    public function setCommentaireTitle(string $CommentaireTitle): self
    {
        $this->CommentaireTitle = $CommentaireTitle;

        return $this;
    }

    public function getCommentaireText(): ?string
    {
        return $this->CommentaireText;
    }

    public function setCommentaireText(string $CommentaireText): self
    {
        $this->CommentaireText = $CommentaireText;

        return $this;
    }

    public function getCommentaireDateCreate(): ?\DateTimeInterface
    {
        return $this->CommentaireDateCreate;
    }

    public function setCommentaireDateCreate(?\DateTimeInterface $CommentaireDateCreate): self
    {
        $this->CommentaireDateCreate = $CommentaireDateCreate;

        return $this;
    }

    public function getCommentaireManyToOneArticle(): ?Article
    {
        return $this->CommentaireManyToOneArticle;
    }

    public function setCommentaireManyToOneArticle(?Article $CommentaireManyToOneArticle): self
    {
        $this->CommentaireManyToOneArticle = $CommentaireManyToOneArticle;

        return $this;
    }

    public function isCommentaireIsPublished(): ?bool
    {
        return $this->CommentaireIsPublished;
    }

    public function setCommentaireIsPublished(bool $CommentaireIsPublished): self
    {
        $this->CommentaireIsPublished = $CommentaireIsPublished;

        return $this;
    }

    public function getUtilisateur(): ?Utilisateur
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?Utilisateur $utilisateur): static
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    public function __toString(): string
    {
        return $this->CommentaireTitle;
    }
}
