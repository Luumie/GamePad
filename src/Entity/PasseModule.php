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
    private $id;

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
    private $erreur;

    /**
     * @ORM\ManyToOne(targetEntity=UserTest::class, inversedBy="passeModules")
     * @ORM\JoinColumn(nullable=false)
     */
    private $userTest;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="passeModules")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity=Module::class, inversedBy="passeModules")
     * @ORM\JoinColumn(nullable=false)
     */
    private $module;

    /**
     * @ORM\ManyToOne(targetEntity=Niveau::class, inversedBy="passeModules")
     * @ORM\JoinColumn(nullable=false)
     */
    private $resultat;

    public function getId(): ?int
    {
        return $this->id;
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


    public function getErreur(): ?int
    {
        return $this->erreur;
    }

    public function setErreur(int $erreur): self
    {
        $this->erreur = $erreur;

        return $this;
    }

    public function getUserTest(): ?UserTest
    {
        return $this->userTest;
    }

    public function setUserTest(?UserTest $userTest): self
    {
        $this->userTest = $userTest;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getModule(): ?Module
    {
        return $this->module;
    }

    public function setModule(?Module $module): self
    {
        $this->module = $module;

        return $this;
    }

    public function getResultat(): ?Niveau
    {
        return $this->resultat;
    }

    public function setResultat(?Niveau $resultat): self
    {
        $this->resultat = $resultat;

        return $this;
    }
}
