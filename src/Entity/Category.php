<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategoryRepository::class)
 */
class Category
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\OneToMany(targetEntity=Met::class, mappedBy="category_id")
     */
    private $mets;

    public function __construct()
    {
        $this->mets = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * @return Collection<int, Met>
     */
    public function getMets(): Collection
    {
        return $this->mets;
    }

    public function addMet(Met $met): self
    {
        if (!$this->mets->contains($met)) {
            $this->mets[] = $met;
            $met->setCategoryId($this);
        }

        return $this;
    }

    public function removeMet(Met $met): self
    {
        if ($this->mets->removeElement($met)) {
            // set the owning side to null (unless already changed)
            if ($met->getCategoryId() === $this) {
                $met->setCategoryId(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->getId();
    }
}