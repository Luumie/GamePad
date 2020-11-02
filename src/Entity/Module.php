<?php

namespace App\Entity;

use App\Repository\ModuleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ModuleRepository::class)
 */
class Module
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $type;

    /**
     * @ORM\ManyToOne(targetEntity=Test::class, inversedBy="modules")
     */
    private $idTest;

    /**
     * @ORM\OneToMany(targetEntity=PasseModule::class, mappedBy="module")
     */
    private $passeModules;

    /**
     * @ORM\OneToMany(targetEntity=TextResultat::class, mappedBy="module")
     */
    private $textResultats;

    public function __construct()
    {
        $this->passeModules = new ArrayCollection();
        $this->textResultats = new ArrayCollection();
    }

 

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getIdTest(): ?Test
    {
        return $this->idTest;
    }

    public function setIdTest(?Test $idTest): self
    {
        $this->idTest = $idTest;

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
            $passeModule->setModule($this);
        }

        return $this;
    }

    public function removePasseModule(PasseModule $passeModule): self
    {
        if ($this->passeModules->contains($passeModule)) {
            $this->passeModules->removeElement($passeModule);
            // set the owning side to null (unless already changed)
            if ($passeModule->getModule() === $this) {
                $passeModule->setModule(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|TextResultat[]
     */
    public function getTextResultats(): Collection
    {
        return $this->textResultats;
    }

    public function addTextResultat(TextResultat $textResultat): self
    {
        if (!$this->textResultats->contains($textResultat)) {
            $this->textResultats[] = $textResultat;
            $textResultat->setModule($this);
        }

        return $this;
    }

    public function removeTextResultat(TextResultat $textResultat): self
    {
        if ($this->textResultats->contains($textResultat)) {
            $this->textResultats->removeElement($textResultat);
            // set the owning side to null (unless already changed)
            if ($textResultat->getModule() === $this) {
                $textResultat->setModule(null);
            }
        }

        return $this;
    }

}
