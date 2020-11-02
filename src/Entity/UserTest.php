<?php

namespace App\Entity;

use App\Repository\UserTestRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserTestRepository::class)
 */
class UserTest
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nom;

    /**
     * @ORM\OneToMany(targetEntity=PasseModule::class, mappedBy="userTest")
     */
    private $passeModules;

    public function __construct()
    {
        $this->passeModules = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return Collection|PasseModule[]
     */
    public function getPasseModules(): Collection
    {
        return $this->passeModules;
    }

    public function addPasseModule(PasseModule $passeModule): self
    {
        if (!$this->passeModules->contains($passeModule)) {
            $this->passeModules[] = $passeModule;
            $passeModule->setUserTest($this);
        }

        return $this;
    }

    public function removePasseModule(PasseModule $passeModule): self
    {
        if ($this->passeModules->contains($passeModule)) {
            $this->passeModules->removeElement($passeModule);
            // set the owning side to null (unless already changed)
            if ($passeModule->getUserTest() === $this) {
                $passeModule->setUserTest(null);
            }
        }

        return $this;
    }
}
