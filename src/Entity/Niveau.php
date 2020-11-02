<?php

namespace App\Entity;

use App\Repository\NiveauRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NiveauRepository::class)
 */
class Niveau
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $libelle;

    /**
     * @ORM\OneToMany(targetEntity=TextResultat::class, mappedBy="niveau")
     */
    private $textResultats;

    /**
     * @ORM\OneToMany(targetEntity=PasseModule::class, mappedBy="resultat")
     */
    private $passeModules;

    public function __construct()
    {
        $this->textResultats = new ArrayCollection();
        $this->passeModules = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

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
            $textResultat->setNiveau($this);
        }

        return $this;
    }

    public function removeTextResultat(TextResultat $textResultat): self
    {
        if ($this->textResultats->contains($textResultat)) {
            $this->textResultats->removeElement($textResultat);
            // set the owning side to null (unless already changed)
            if ($textResultat->getNiveau() === $this) {
                $textResultat->setNiveau(null);
            }
        }

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
            $passeModule->setResultat($this);
        }

        return $this;
    }

    public function removePasseModule(PasseModule $passeModule): self
    {
        if ($this->passeModules->contains($passeModule)) {
            $this->passeModules->removeElement($passeModule);
            // set the owning side to null (unless already changed)
            if ($passeModule->getResultat() === $this) {
                $passeModule->setResultat(null);
            }
        }

        return $this;
    }
}
