<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
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

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $AritcleDateCreate = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $AritcleDateUpdate = null;

    #[ORM\Column]
    private ?bool $AritcleIsPublished = null;

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
}
