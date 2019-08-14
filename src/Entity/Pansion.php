<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PansionRepository")
 */
class Pansion
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $montant;

    /**
     * @ORM\Column(type="datetime")
     */
    private $datePaiement;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Tranche", inversedBy="pansions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $eleve;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Salle", inversedBy="pansions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $salle;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Tranche", mappedBy="pansion", orphanRemoval=true)
     */
    private $tranches;

    public function __construct()
    {
        $this->tranches = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMontant(): ?int
    {
        return $this->montant;
    }

    public function setMontant(int $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getDatePaiement(): ?\DateTimeInterface
    {
        return $this->datePaiement;
    }

    public function setDatePaiement(\DateTimeInterface $datePaiement): self
    {
        $this->datePaiement = $datePaiement;

        return $this;
    }

    public function getEleve(): ?Eleve
    {
        return $this->eleve;
    }

    public function setEleve(?Eleve $eleve): self
    {
        $this->eleve = $eleve;

        return $this;
    }

    public function getSalle(): ?Salle
    {
        return $this->salle;
    }

    public function setSalle(?Salle $salle): self
    {
        $this->salle = $salle;

        return $this;
    }

    /**
     * @return Collection|Tranche[]
     */
    public function getTranches(): Collection
    {
        return $this->tranches;
    }

    public function addTranch(Tranche $tranch): self
    {
        if (!$this->tranches->contains($tranch)) {
            // $this->tranches[] = $tranch;
            $this->tranches->add($tranch);
            $tranch->setPansion($this);
        }

        return $this;
    }

    public function removeTranch(Tranche $tranch): self
    {
        if ($this->tranches->contains($tranch)) {
            $this->tranches->removeElement($tranch);
            // set the owning side to null (unless already changed)
            if ($tranch->getPansion() === $this) {
                $tranch->setPansion(null);
            }
        }

        return $this;
    }
}
