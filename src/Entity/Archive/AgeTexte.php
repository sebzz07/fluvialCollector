<?php

namespace App\Entity\Archive;

use App\Repository\Archive\AgeTexteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AgeTexteRepository::class)]
class AgeTexte
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'smallint')]
    private ?int $CLE = null;

    #[ORM\Column(length: 12, options: ["default" => ''])]
    private ?string $DATEDEB = '';

    #[ORM\Column(length: 12, options: ["default" => ''])]
    private ?string $DATEFIN = '';

    #[ORM\Column(length: 80, options: ["default" => ''])]
    private ?string $LIEU = '';

    #[ORM\Column(type: 'text')]
    private ?string $TEXTE = null;

    #[ORM\Column(length: 120, options: ["default" => ''])]
    private ?string $TITRE = '';

    public function getCle(): ?int
    {
        return $this->CLE;
    }

    public function getDatedeb(): ?string
    {
        return $this->DATEDEB;
    }

    public function setDatedeb(string $DATEDEB): static
    {
        $this->DATEDEB = $DATEDEB;

        return $this;
    }

    public function getDatefin(): ?string
    {
        return $this->DATEFIN;
    }

    public function setDatefin(string $DATEFIN): static
    {
        $this->DATEFIN = $DATEFIN;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->LIEU;
    }

    public function setLieu(string $LIEU): static
    {
        $this->LIEU = $LIEU;

        return $this;
    }

    public function getTexte(): ?string
    {
        return $this->TEXTE;
    }

    public function setTexte(string $TEXTE): static
    {
        $this->TEXTE = $TEXTE;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->TITRE;
    }

    public function setTitre(string $TITRE): static
    {
        $this->TITRE = $TITRE;

        return $this;
    }
}
