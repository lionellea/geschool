<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AcheterRepository")
 */
class Acheter
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
    private $prix;

    /**
     * @ORM\Column(type="date")
     */
    private $dateAchat;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Eleve", inversedBy="acheters")
     * @ORM\JoinColumn(nullable=false)
     */
    private $eleve;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Accessoire", inversedBy="acheters")
     * @ORM\JoinColumn(nullable=false)
     */
    private $accessoire;

    public function __construct(){
        $this->dateAchat = new \DateTime('now');
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getDateAchat(): ?\DateTimeInterface
    {
        return $this->dateAchat;
    }

    public function setDateAchat(\DateTimeInterface $dateAchat): self
    {
        $this->dateAchat = $dateAchat;

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

    public function getAccessoire(): ?Accessoire
    {
        return $this->accessoire;
    }

    public function setAccessoire(?Accessoire $accessoire): self
    {
        $this->accessoire = $accessoire;

        return $this;
    }


}
