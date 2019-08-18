<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AccessoireRepository")
 */
class Accessoire
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelle;


    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Acheter", mappedBy="accessoire", orphanRemoval=true)
     */
    private $acheters;

    public function __construct()
    {
        $this->acheters = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }


    /**
     * @return Collection|Acheter[]
     */
    public function getAcheters(): Collection
    {
        return $this->acheters;
    }

    public function addAcheter(Acheter $acheter): self
    {
        if (!$this->acheters->contains($acheter)) {
            $this->acheters[] = $acheter;
            $acheter->setAccessoire($this);
        }

        return $this;
    }

    public function removeAcheter(Acheter $acheter): self
    {
        if ($this->acheters->contains($acheter)) {
            $this->acheters->removeElement($acheter);
            // set the owning side to null (unless already changed)
            if ($acheter->getAccessoire() === $this) {
                $acheter->setAccessoire(null);
            }
        }

        return $this;
    }
}
