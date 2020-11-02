<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @UniqueEntity(fields={"email"}, message="There is already an account with this email")
 */
class User implements UserInterface
{
    public function __construct(){

        $this->createDate = new \DateTime('now');
        $this->achats = new ArrayCollection();
        $this->passeModules = new ArrayCollection();
        $this->textResultats = new ArrayCollection();
    }

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $entreprise;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $logo;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $presentation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adresseRue;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $adresseCode;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $adresseVille;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $internet;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $createDate;

    /**
     * @ORM\OneToMany(targetEntity=Achat::class, mappedBy="user")
     */
    private $achats;

    /**
     * @ORM\OneToMany(targetEntity=PasseModule::class, mappedBy="user")
     */
    private $passeModules;

    /**
     * @ORM\OneToMany(targetEntity=TextResultat::class, mappedBy="user")
     */
    private $textResultats;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getEntreprise(): ?string
    {
        return $this->entreprise;
    }

    public function setEntreprise(?string $entreprise): self
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(?string $logo): self
    {
        $this->logo = $logo;

        return $this;
    }

    public function getPresentation(): ?string
    {
        return $this->presentation;
    }

    public function setPresentation(?string $presentation): self
    {
        $this->presentation = $presentation;

        return $this;
    }

    public function getAdresseRue(): ?string
    {
        return $this->adresseRue;
    }

    public function setAdresseRue(?string $adresseRue): self
    {
        $this->adresseRue = $adresseRue;

        return $this;
    }

    public function getAdresseCode(): ?string
    {
        return $this->adresseCode;
    }

    public function setAdresseCode(?string $adresseCode): self
    {
        $this->adresseCode = $adresseCode;

        return $this;
    }

    public function getAdresseVille(): ?string
    {
        return $this->adresseVille;
    }

    public function setAdresseVille(?string $adresseVille): self
    {
        $this->adresseVille = $adresseVille;

        return $this;
    }

    public function getInternet(): ?string
    {
        return $this->internet;
    }

    public function setInternet(?string $internet): self
    {
        $this->internet = $internet;

        return $this;
    }

    public function getCreateDate(): ?\DateTimeInterface
    {
        return $this->createDate;
    }

    public function setCreateDate(\DateTimeInterface $createDate): self
    {
        $this->createDate = $createDate;

        return $this; 
        
    }

    /**
     * @return Collection|Achat[]
     */
    public function getAchats(): Collection
    {
        return $this->achats;
    }

    public function addAchat(Achat $achat): self
    {
        if (!$this->achats->contains($achat)) {
            $this->achats[] = $achat;
            $achat->setUser($this);
        }

        return $this;
    }

    public function removeAchat(Achat $achat): self
    {
        if ($this->achats->contains($achat)) {
            $this->achats->removeElement($achat);
            // set the owning side to null (unless already changed)
            if ($achat->getUser() === $this) {
                $achat->setUser(null);
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
            $passeModule->setUser($this);
        }

        return $this;
    }

    public function removePasseModule(PasseModule $passeModule): self
    {
        if ($this->passeModules->contains($passeModule)) {
            $this->passeModules->removeElement($passeModule);
            // set the owning side to null (unless already changed)
            if ($passeModule->getUser() === $this) {
                $passeModule->setUser(null);
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
            $textResultat->setUser($this);
        }

        return $this;
    }

    public function removeTextResultat(TextResultat $textResultat): self
    {
        if ($this->textResultats->contains($textResultat)) {
            $this->textResultats->removeElement($textResultat);
            // set the owning side to null (unless already changed)
            if ($textResultat->getUser() === $this) {
                $textResultat->setUser(null);
            }
        }

        return $this;
    }

    public function __toString(){
       
        return (string) $this->getUsername();
    }
}

