<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AnneeRepository")
 */
class Annee
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $dateDebut;

    /**
     * @ORM\Column(type="date")
     */
    private $dateFin;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Inscription", mappedBy="annee", orphanRemoval=true)
     */
    private $inscriptions;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Appartenir", mappedBy="annee", orphanRemoval=true)
     */
    private $appartenirs;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Pansion", mappedBy="annee", orphanRemoval=true)
     */
    private $pansions;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Acheter", mappedBy="annee", orphanRemoval=true)
     */
    private $acheters;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Depense", mappedBy="annee", orphanRemoval=true)
     */
    private $depenses;

    public function __construct()
    {
        $this->inscriptions = new ArrayCollection();
        $this->appartenirs = new ArrayCollection();
        $this->pansions = new ArrayCollection();
        $this->acheters = new ArrayCollection();
        $this->depenses = new ArrayCollection();
    }

   

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->getDateDebut();
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
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
            $inscription->setAnnee($this);
        }

        return $this;
    }

    public function removeInscription(Inscription $inscription): self
    {
        if ($this->inscriptions->contains($inscription)) {
            $this->inscriptions->removeElement($inscription);
            // set the owning side to null (unless already changed)
            if ($inscription->getAnnee() === $this) {
                $inscription->setAnnee(null);
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
            $appartenir->setAnnee($this);
        }

        return $this;
    }

    public function removeAppartenir(Appartenir $appartenir): self
    {
        if ($this->appartenirs->contains($appartenir)) {
            $this->appartenirs->removeElement($appartenir);
            // set the owning side to null (unless already changed)
            if ($appartenir->getAnnee() === $this) {
                $appartenir->setAnnee(null);
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
            $pansion->setAnnee($this);
        }

        return $this;
    }

    public function removePansion(Pansion $pansion): self
    {
        if ($this->pansions->contains($pansion)) {
            $this->pansions->removeElement($pansion);
            // set the owning side to null (unless already changed)
            if ($pansion->getAnnee() === $this) {
                $pansion->setAnnee(null);
            }
        }

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
            $acheter->setAnnee($this);
        }

        return $this;
    }

    public function removeAcheter(Acheter $acheter): self
    {
        if ($this->acheters->contains($acheter)) {
            $this->acheters->removeElement($acheter);
            // set the owning side to null (unless already changed)
            if ($acheter->getAnnee() === $this) {
                $acheter->setAnnee(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Depense[]
     */
    public function getDepenses(): Collection
    {
        return $this->depenses;
    }

    public function addDepense(Depense $depense): self
    {
        if (!$this->depenses->contains($depense)) {
            $this->depenses[] = $depense;
            $depense->setAnnee($this);
        }

        return $this;
    }

    public function removeDepense(Depense $depense): self
    {
        if ($this->depenses->contains($depense)) {
            $this->depenses->removeElement($depense);
            // set the owning side to null (unless already changed)
            if ($depense->getAnnee() === $this) {
                $depense->setAnnee(null);
            }
        }

        return $this;
    }

}
