<?php

namespace App\Entity\Archive;

use App\Repository\Archive\ArtSaisieRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArtSaisieRepository::class)]
class ArtSaisie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'bigint')]
    private ?int $CLE = null;

    #[ORM\Column(length: 10, options: ["default" => ''])]
    private ?string $DATE = '';

    #[ORM\Column(length: 1, options: ["default" => ''])]
    private ?string $ETAT = '';

    #[ORM\Column(length: 40, options: ["default" => ''])]
    private ?string $NOM = '';

    #[ORM\Column(length: 40, options: ["default" => ''])]
    private ?string $PRENOM = '';

    #[ORM\Column(length: 40, options: ["default" => ''])]
    private ?string $ADRESSE1 = '';

    #[ORM\Column(length: 40, options: ["default" => ''])]
    private ?string $ADRESSE2 = '';

    #[ORM\Column(length: 10, options: ["default" => ''])]
    private ?string $CP = '';

    #[ORM\Column(length: 40, options: ["default" => ''])]
    private ?string $VILLE = '';

    #[ORM\Column(length: 40, options: ["default" => ''])]
    private ?string $PAYS = '';

    #[ORM\Column(length: 20, options: ["default" => ''])]
    private ?string $TEL = '';

    #[ORM\Column(length: 20, options: ["default" => ''])]
    private ?string $FAX = '';

    #[ORM\Column(length: 80, options: ["default" => ''])]
    private ?string $EMAIL = '';

    #[ORM\Column(type: 'bigint', options: ["default" => 0])]
    private ?int $FICHEARTICLE = 0;

    #[ORM\Column(type: 'decimal', precision: 3, scale: 2, options: ["default" => 0.00])]
    private ?float $TOTAL = 0.00;

    #[ORM\Column(type: 'smallint')]
    private ?int $OFFRE = null;

    #[ORM\Column(length: 250)]
    private ?string $LIVRAISON = null;

    public function getCle(): ?int
    {
        return $this->CLE;
    }

    public function getDate(): ?string
    {
        return $this->DATE;
    }

    public function setDate(string $DATE): static
    {
        $this->DATE = $DATE;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->ETAT;
    }

    public function setEtat(string $ETAT): static
    {
        $this->ETAT = $ETAT;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->NOM;
    }

    public function setNom(string $NOM): static
    {
        $this->NOM = $NOM;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->PRENOM;
    }

    public function setPrenom(string $PRENOM): static
    {
        $this->PRENOM = $PRENOM;

        return $this;
    }

    public function getAdresse1(): ?string
    {
        return $this->ADRESSE1;
    }

    public function setAdresse1(string $ADRESSE1): static
    {
        $this->ADRESSE1 = $ADRESSE1;

        return $this;
    }

    public function getAdresse2(): ?string
    {
        return $this->ADRESSE2;
    }

    public function setAdresse2(string $ADRESSE2): static
    {
        $this->ADRESSE2 = $ADRESSE2;

        return $this;
    }

    public function getCp(): ?string
    {
        return $this->CP;
    }

    public function setCp(string $CP): static
    {
        $this->CP = $CP;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->VILLE;
    }

    public function setVille(string $VILLE): static
    {
        $this->VILLE = $VILLE;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->PAYS;
    }

    public function setPays(string $PAYS): static
    {
        $this->PAYS = $PAYS;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->TEL;
    }

    public function setTel(string $TEL): static
    {
        $this->TEL = $TEL;

        return $this;
    }

    public function getFax(): ?string
    {
        return $this->FAX;
    }

    public function setFax(string $FAX): static
    {
        $this->FAX = $FAX;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->EMAIL;
    }

    public function setEmail(string $EMAIL): static
    {
        $this->EMAIL = $EMAIL;

        return $this;
    }

    public function getFicheArticle(): ?int
    {
        return $this->FICHEARTICLE;
    }

    public function setFicheArticle(int $FICHEARTICLE): static
    {
        $this->FICHEARTICLE = $FICHEARTICLE;

        return $this;
    }

    public function getTotal(): ?float
    {
        return $this->TOTAL;
    }

    public function setTotal(float $TOTAL): static
    {
        $this->TOTAL = $TOTAL;

        return $this;
    }

    public function getOffre(): ?int
    {
        return $this->OFFRE;
    }

    public function setOffre(int $OFFRE): static
    {
        $this->OFFRE = $OFFRE;

        return $this;
    }

    public function getLivraison(): ?string
    {
        return $this->LIVRAISON;
    }

    public function setLivraison(string $LIVRAISON): static
    {
        $this->LIVRAISON = $LIVRAISON;

        return $this;
    }
}
