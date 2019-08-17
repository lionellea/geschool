<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SalleRepository")
 */
class Salle
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
     * @ORM\ManyToOne(targetEntity="App\Entity\Classe", inversedBy="salles")
     * @ORM\JoinColumn(nullable=false)
     */
    private $classe;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Eleve", mappedBy="salle", orphanRemoval=true)
     */
    private $eleves;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Inscription", mappedBy="salle", orphanRemoval=true)
     */
    private $inscriptions;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Pansion", mappedBy="salle", orphanRemoval=true)
     */
    private $pansions;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Appartenir", mappedBy="salle", orphanRemoval=true)
     */
    private $appartenirs;

    public function __construct()
    {
        $this->eleves = new ArrayCollection();
        $this->inscriptions = new ArrayCollection();
        $this->pansions = new ArrayCollection();
        $this->appartenirs = new ArrayCollection();
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

    public function getClasse(): ?Classe
    {
        return $this->classe;
    }

    public function setClasse(?Classe $classe): self
    {
        $this->classe = $classe;

        return $this;
    }

    /**
     * @return Collection|Eleve[]
     */
    public function getEleves(): Collection
    {
        return $this->eleves;
    }

    public function addElefe(Eleve $elefe): self
    {
        if (!$this->eleves->contains($elefe)) {
            $this->eleves[] = $elefe;
            $elefe->setSalle($this);
        }

        return $this;
    }

    public function removeElefe(Eleve $elefe): self
    {
        if ($this->eleves->contains($elefe)) {
            $this->eleves->removeElement($elefe);
            // set the owning side to null (unless already changed)
            if ($elefe->getSalle() === $this) {
                $elefe->setSalle(null);
            }
        }

        return $this;
    }
    
    public function __toString(){

        return $this->libelle;
    }

    /**
     * @return Collection|Inscription[]
     */
    public function getInscriptions(): Collection
    {
        return $this->inscriptions;
    }

    public function addInscription(Inscription $inscription): self
    {
        if (!$this->inscriptions->contains($inscription)) {
            $this->inscriptions[] = $inscription;
            $inscription->setSalle($this);
        }

        return $this;
    }

    public function removeInscription(Inscription $inscription): self
    {
        if ($this->inscriptions->contains($inscription)) {
            $this->inscriptions->removeElement($inscription);
            // set the owning side to null (unless already changed)
            if ($inscription->getSalle() === $this) {
                $inscription->setSalle(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Pansion[]
     */
    public function getPansions(): Collection
    {
        return $this->pansions;
    }

    public function addPansion(Pansion $pansion): self
    {
        if (!$this->pansions->contains($pansion)) {
            $this->pansions[] = $pansion;
            $pansion->setSalle($this);
        }

        return $this;
    }

    public function removePansion(Pansion $pansion): self
    {
        if ($this->pansions->contains($pansion)) {
            $this->pansions->removeElement($pansion);
            // set the owning side to null (unless already changed)
            if ($pansion->getSalle() === $this) {
                $pansion->setSalle(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Appartenir[]
     */
    public function getAppartenirs(): Collection
    {
        return $this->appartenirs;
    }

    public function addAppartenir(Appartenir $appartenir): self
    {
        if (!$this->appartenirs->contains($appartenir)) {
            $this->appartenirs[] = $appartenir;
            $appartenir->setSalle($this);
        }

        return $this;
    }

    public function removeAppartenir(Appartenir $appartenir): self
    {
        if ($this->appartenirs->contains($appartenir)) {
            $this->appartenirs->removeElement($appartenir);
            // set the owning side to null (unless already changed)
            if ($appartenir->getSalle() === $this) {
                $appartenir->setSalle(null);
            }
        }

        return $this;
    }
}
