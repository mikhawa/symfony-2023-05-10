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

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true,
        options: ["default" => "CURRENT_TIMESTAMP"])]
    private ?\DateTimeInterface $ArticleDateCreate = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true, columnDefinition: "TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP",)]
    private ?\DateTimeInterface $ArticleDateUpdate = null;

    #[ORM\Column]
    private ?bool $ArticleIsPublished = null;

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

    public function getArticleDateCreate(): ?\DateTimeInterface
    {
        return $this->ArticleDateCreate;
    }

    public function setAritcleDateCreate(?\DateTimeInterface $ArticleDateCreate): self
    {
        $this->ArticleDateCreate = $ArticleDateCreate;

        return $this;
    }

    public function getArticleDateUpdate(): ?\DateTimeInterface
    {
        return $this->ArticleDateUpdate;
    }

    public function setArticleDateUpdate(?\DateTimeInterface $ArticleDateUpdate): self
    {
        $this->ArticleDateUpdate = ArticleDateUpdate;

        return $this;
    }

    public function isArticleIsPublished(): ?bool
    {
        return $this->ArticleIsPublished;
    }

    public function setArticleIsPublished(bool $ArticleIsPublished): self
    {
        $this->ArticleIsPublished = $ArticleIsPublished;

        return $this;
    }
}
