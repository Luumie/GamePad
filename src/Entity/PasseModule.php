<?php

namespace App\Entity;

use App\Repository\PasseModuleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PasseModuleRepository::class)
 */
class PasseModule
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $idPasseModule;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateInscription;

    /**
     * @ORM\Column(type="datetime")
     */
    private $datePassage;

    /**
     * @ORM\Column(type="integer")
     */
    private $resultat;

    /**
     * @ORM\Column(type="integer")
     */
    private $erreur;

    public function getIdPasseModule(): ?int
    {
        return $this->idPasseModule;
    }

    public function getDateInscription(): ?\DateTimeInterface
    {
        return $this->dateInscription;
    }

    public function setDateInscription(\DateTimeInterface $dateInscription): self
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }

    public function getDatePassage(): ?\DateTimeInterface
    {
        return $this->datePassage;
    }

    public function setDatePassage(\DateTimeInterface $datePassage): self
    {
        $this->datePassage = $datePassage;

        return $this;
    }

    public function getResultat(): ?int
    {
        return $this->resultat;
    }

    public function setResultat(int $resultat): self
    {
        $this->resultat = $resultat;

        return $this;
    }

    public function getErreur(): ?int
    {
        return $this->erreur;
    }

    public function setErreur(int $erreur): self
    {
        $this->erreur = $erreur;

        return $this;
    }
}
