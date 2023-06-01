<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArticleRepository::class)]
class Article
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(options: ["unsigned" => true])]
    private ?int $id = null;

    #[ORM\Column(length: 160)]
    private ?string $ArticleTitle = null;

    #[ORM\Column(length: 160)]
    private ?string $ArticleSlug = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $ArticleContent = null;

    // pour que la date actuelle soit insérée automatiquement lors de la création
    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true, options: ["default" => "CURRENT_TIMESTAMP"])]
    private ?\DateTimeInterface $AritcleDateCreate = null;

    // pour que la date actuelle soit insérée automatiquement lors de la mise à jour
    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true, options: ["onupdate" => "CURRENT_TIMESTAMP"])]
    private ?\DateTimeInterface $AritcleDateUpdate = null;

    // pour que la valeur par défaut soit false
    #[ORM\Column(type: Types::BOOLEAN, options: ["default" => false])]
    private ?bool $AritcleIsPublished = null;

    #[ORM\OneToMany(mappedBy: 'CommentaireManyToOneArticle', targetEntity: Commentaire::class)]
    private Collection $Commentaires;

    public function __construct()
    {
        $this->Commentaires = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getArticleTitle(): ?string
    {
        return $this->ArticleTitle;
    }

    public function setArticleTitle(string $ArticleTitle): self
    {
        $this->ArticleTitle = $ArticleTitle;

        return $this;
    }

    public function getArticleSlug(): ?string
    {
        return $this->ArticleSlug;
    }

    public function setArticleSlug(string $ArticleSlug): self
    {
        $this->ArticleSlug = $ArticleSlug;

        return $this;
    }

    public function getArticleContent(): ?string
    {
        return $this->ArticleContent;
    }

    public function setArticleContent(string $ArticleContent): self
    {
        $this->ArticleContent = $ArticleContent;

        return $this;
    }

    public function getAritcleDateCreate(): ?\DateTimeInterface
    {
        return $this->AritcleDateCreate;
    }

    public function setAritcleDateCreate(?\DateTimeInterface $AritcleDateCreate): self
    {
        $this->AritcleDateCreate = $AritcleDateCreate;

        return $this;
    }

    public function getAritcleDateUpdate(): ?\DateTimeInterface
    {
        return $this->AritcleDateUpdate;
    }

    public function setAritcleDateUpdate(?\DateTimeInterface $AritcleDateUpdate): self
    {
        $this->AritcleDateUpdate = $AritcleDateUpdate;

        return $this;
    }

    public function isAritcleIsPublished(): ?bool
    {
        return $this->AritcleIsPublished;
    }

    public function setAritcleIsPublished(bool $AritcleIsPublished): self
    {
        $this->AritcleIsPublished = $AritcleIsPublished;

        return $this;
    }

    /**
     * @return Collection<int, Commentaire>
     */
    public function getCommentaires(): Collection
    {
        return $this->Commentaires;
    }

    public function addCommentaire(Commentaire $commentaire): self
    {
        if (!$this->Commentaires->contains($commentaire)) {
            $this->Commentaires->add($commentaire);
            $commentaire->setCommentaireManyToOneArticle($this);
        }

        return $this;
    }

    public function removeCommentaire(Commentaire $commentaire): self
    {
        if ($this->Commentaires->removeElement($commentaire)) {
            // set the owning side to null (unless already changed)
            if ($commentaire->getCommentaireManyToOneArticle() === $this) {
                $commentaire->setCommentaireManyToOneArticle(null);
            }
        }

        return $this;
    }
}
