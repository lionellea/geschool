<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EleveRepository")
 */
class Eleve
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
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sexe;

    /**
     * @ORM\Column(type="date")
     */
    private $dateDeNaissance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lieuDeNaissance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nationalite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $matricule = "null";

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Salle", inversedBy="eleves")
     * @ORM\JoinColumn(nullable=false)
     */
    private $salle;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Inscription", mappedBy="eleve", orphanRemoval=true)
     */
    private $inscriptions;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Pansion", mappedBy="eleve", orphanRemoval=true)
     */
    private $pansions;

    /**
     * @ORM\Column(type="boolean")
     */
    private $etatInscription = false;

    public function __construct()
    {
        $this->inscriptions = new ArrayCollection();
        $this->pansions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getDateDeNaissance(): ?\DateTimeInterface
    {
        return $this->dateDeNaissance;
    }

    public function setDateDeNaissance(\DateTimeInterface $dateDeNaissance): self
    {
        $this->dateDeNaissance = $dateDeNaissance;

        return $this;
    }

    public function getLieuDeNaissance(): ?string
    {
        return $this->lieuDeNaissance;
    }

    public function setLieuDeNaissance(string $lieuDeNaissance): self
    {
        $this->lieuDeNaissance = $lieuDeNaissance;

        return $this;
    }

    public function getNationalite(): ?string
    {
        return $this->nationalite;
    }

    public function setNationalite(string $nationalite): self
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(string $matricule): self
    {
        $this->matricule = $matricule;

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
            $inscription->setEleve($this);
        }

        return $this;
    }

    public function removeInscription(Inscription $inscription): self
    {
        if ($this->inscriptions->contains($inscription)) {
            $this->inscriptions->removeElement($inscription);
            // set the owning side to null (unless already changed)
            if ($inscription->getEleve() === $this) {
                $inscription->setEleve(null);
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
            $pansion->setEleve($this);
        }

        return $this;
    }

    public function removePansion(Pansion $pansion): self
    {
        if ($this->pansions->contains($pansion)) {
            $this->pansions->removeElement($pansion);
            // set the owning side to null (unless already changed)
            if ($pansion->getEleve() === $this) {
                $pansion->setEleve(null);
            }
        }

        return $this;
    }

    public function getEtatInscription(): ?bool
    {
        return $this->etatInscription;
    }

    public function setEtatInscription(bool $etatInscription): self
    {
        $this->etatInscription = $etatInscription;

        return $this;
    }
    
}
