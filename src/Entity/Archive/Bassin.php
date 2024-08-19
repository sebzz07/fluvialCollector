<?php

namespace App\Entity\Archive;

use App\Repository\Archive\BassinRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BassinRepository::class)]
class Bassin
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer', options: ["default" => 0])]
    private ?int $CLE = 0;

    #[ORM\Column(length: 80, options: ["default" => ''])]
    private ?string $LIBELLE = '';

    #[ORM\Column(type: 'text')]
    private ?string $DESCRIPTION = null;

    #[ORM\Column(length: 80)]
    private ?string $LIBELLE_EN = null;

    #[ORM\Column(type: 'text')]
    private ?string $DESCRIPTION_EN = null;

    #[ORM\Column(length: 80)]
    private ?string $LIBELLE_DE = null;

    #[ORM\Column(type: 'text')]
    private ?string $DESCRIPTION_DE = null;

    public function getCle(): ?int
    {
        return $this->CLE;
    }

    public function setCle(int $CLE): static
    {
        $this->CLE = $CLE;

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->LIBELLE;
    }

    public function setLibelle(string $LIBELLE): static
    {
        $this->LIBELLE = $LIBELLE;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->DESCRIPTION;
    }

    public function setDescription(string $DESCRIPTION): static
    {
        $this->DESCRIPTION = $DESCRIPTION;

        return $this;
    }

    public function getLibelleEn(): ?string
    {
        return $this->LIBELLE_EN;
    }

    public function setLibelleEn(string $LIBELLE_EN): static
    {
        $this->LIBELLE_EN = $LIBELLE_EN;

        return $this;
    }

    public function getDescriptionEn(): ?string
    {
        return $this->DESCRIPTION_EN;
    }

    public function setDescriptionEn(string $DESCRIPTION_EN): static
    {
        $this->DESCRIPTION_EN = $DESCRIPTION_EN;

        return $this;
    }

    public function getLibelleDe(): ?string
    {
        return $this->LIBELLE_DE;
    }

    public function setLibelleDe(string $LIBELLE_DE): static
    {
        $this->LIBELLE_DE = $LIBELLE_DE;

        return $this;
    }

    public function getDescriptionDe(): ?string
    {
        return $this->DESCRIPTION_DE;
    }

    public function setDescriptionDe(string $DESCRIPTION_DE): static
    {
        $this->DESCRIPTION_DE = $DESCRIPTION_DE;

        return $this;
    }
}
