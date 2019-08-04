<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TrancheRepository")
 */
class Tranche
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
    private $code;

    /**
     * @ORM\Column(type="integer")
     */
    private $montant;

    /**
     * @ORM\Column(type="datetime")
     */
    private $datePaiement;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Pansion", mappedBy="tranche", orphanRemoval=true)
     */
    private $pansions;

    public function __construct()
    {
        $this->pansions = new ArrayCollection();
    }

    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
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
            $pansion->setTranche($this);
        }

        return $this;
    }

    public function removePansion(Pansion $pansion): self
    {
        if ($this->pansions->contains($pansion)) {
            $this->pansions->removeElement($pansion);
            // set the owning side to null (unless already changed)
            if ($pansion->getTranche() === $this) {
                $pansion->setTranche(null);
            }
        }

        return $this;
    }

  
}
