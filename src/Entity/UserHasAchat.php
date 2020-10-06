<?php

namespace App\Entity;

use App\Repository\UserHasAchatRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserHasAchatRepository::class)
 */
class UserHasAchat
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $idUserHasAchat;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateDebut;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateFin;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbTestRestant;

    public function getIdUserHasAchat(): ?int
    {
        return $this->idUserHasAchat;
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

    public function getNbTestRestant(): ?int
    {
        return $this->nbTestRestant;
    }

    public function setNbTestRestant(int $nbTestRestant): self
    {
        $this->nbTestRestant = $nbTestRestant;

        return $this;
    }
}
