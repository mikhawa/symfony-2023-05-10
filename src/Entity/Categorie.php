<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategorieRepository::class)]
class Categorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(options: ["unsigned" => true])]
    private ?int $id = null;

    #[ORM\Column(length: 160)]
    private ?string $CategorieTitle = null;

    #[ORM\Column(length: 160)]
    private ?string $CategorySlug = null;

    #[ORM\Column(length: 500, nullable: true)]
    private ?string $CategorieDesc = null;

    #[ORM\ManyToMany(targetEntity: Article::class, inversedBy: 'categories')]
    private Collection $Categorie_m2m_Article;

    public function __construct()
    {
        $this->Categorie_m2m_Article = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategorieTitle(): ?string
    {
        return $this->CategorieTitle;
    }

    public function setCategorieTitle(string $CategorieTitle): self
    {
        $this->CategorieTitle = $CategorieTitle;

        return $this;
    }

    public function getCategorySlug(): ?string
    {
        return $this->CategorySlug;
    }

    public function setCategorySlug(string $CategorySlug): self
    {
        $this->CategorySlug = $CategorySlug;

        return $this;
    }

    public function getCategorieDesc(): ?string
    {
        return $this->CategorieDesc;
    }

    public function setCategorieDesc(?string $CategorieDesc): self
    {
        $this->CategorieDesc = $CategorieDesc;

        return $this;
    }

    /**
     * @return Collection<int, Article>
     */
    public function getCategorieM2mArticle(): Collection
    {
        return $this->Categorie_m2m_Article;
    }

    public function addCategorieM2mArticle(Article $categorieM2mArticle): self
    {
        if (!$this->Categorie_m2m_Article->contains($categorieM2mArticle)) {
            $this->Categorie_m2m_Article->add($categorieM2mArticle);
        }

        return $this;
    }

    public function removeCategorieM2mArticle(Article $categorieM2mArticle): self
    {
        $this->Categorie_m2m_Article->removeElement($categorieM2mArticle);

        return $this;
    }
    public function __toString(): string
    {
        return $this->CategorieTitle;
    }
}
