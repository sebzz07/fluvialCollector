<?php

namespace App\Entity\Archive;

use App\Repository\Archive\Abo_UserRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: Abo_UserRepository::class)]
class AboUser
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $Abo_User_Id = null;

    #[ORM\Column(length: 255)]
    private ?string $Abo_User_Societe = null;

    #[ORM\Column(length: 255)]
    private ?string $Abo_User_Civ = null;

    #[ORM\Column(length: 255)]
    private ?string $Abo_User_Nom = null;

    #[ORM\Column(length: 255)]
    private ?string $Abo_User_Prenom = null;

    #[ORM\Column(length: 255)]
    private ?string $Abo_User_Mail = null;

    #[ORM\Column(length: 255)]
    private ?string $Abo_User_Pass = null;

    public function getId(): ?int
    {
        return $this->Abo_User_Id;
    }

    public function setId(int $Abo_User_Id): static
    {
        $this->Abo_User_Id = $Abo_User_Id;

        return $this;
    }

    public function getAboUserSociete(): ?string
    {
        return $this->Abo_User_Societe;
    }

    public function setAboUserSociete(string $Abo_User_Societe): static
    {
        $this->Abo_User_Societe = $Abo_User_Societe;

        return $this;
    }

    public function getAboUserCiv(): ?string
    {
        return $this->Abo_User_Civ;
    }

    public function setAboUserCiv(string $Abo_User_Civ): static
    {
        $this->Abo_User_Civ = $Abo_User_Civ;

        return $this;
    }

    public function getAboUserNom(): ?string
    {
        return $this->Abo_User_Nom;
    }

    public function setAboUserNom(string $Abo_User_Nom): static
    {
        $this->Abo_User_Nom = $Abo_User_Nom;

        return $this;
    }

    public function getAboUserPrenom(): ?string
    {
        return $this->Abo_User_Prenom;
    }

    public function setAboUserPrenom(string $Abo_User_Prenom): static
    {
        $this->Abo_User_Prenom = $Abo_User_Prenom;

        return $this;
    }

    public function getAboUserMail(): ?string
    {
        return $this->Abo_User_Mail;
    }

    public function setAboUserMail(string $Abo_User_Mail): static
    {
        $this->Abo_User_Mail = $Abo_User_Mail;

        return $this;
    }

    public function getAboUserPass(): ?string
    {
        return $this->Abo_User_Pass;
    }

    public function setAboUserPass(string $Abo_User_Pass): static
    {
        $this->Abo_User_Pass = $Abo_User_Pass;

        return $this;
    }
}
