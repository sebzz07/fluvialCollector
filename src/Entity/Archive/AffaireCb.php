<?php

namespace App\Entity\Archive;

use App\Repository\Archive\AffaireCbRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AffaireCbRepository::class)]
class AffaireCb
{
    #[ORM\Column(length: 10, options: ["default" => ''])]
    private ?string $CODE = '';

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'bigint')]
    private ?int $CLE = null;

    #[ORM\Column(length: 10, options: ["default" => ''])]
    private ?string $DATECREA = '';

    #[ORM\Column(length: 40, options: ["default" => ''])]
    private ?string $NOM = '';

    #[ORM\Column(length: 40, options: ["default" => ''])]
    private ?string $PRENOM = '';

    #[ORM\Column(length: 40, options: ["default" => ''])]
    private ?string $EMAIL = '';

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

    #[ORM\Column(length: 255)]
    private ?string $code_promo = null;

    #[ORM\Column(length: 16, options: ["default" => ''])]
    private ?string $NUMCB = '';

    #[ORM\Column(length: 2, options: ["default" => ''])]
    private ?string $MOISCB = '';

    #[ORM\Column(length: 2, options: ["default" => ''])]
    private ?string $ANNEECB = '';

    #[ORM\Column(length: 80, options: ["default" => ''])]
    private ?string $NOMCB = '';

    #[ORM\Column(type: 'text')]
    private ?string $TEXTE = null;

    #[ORM\Column(length: 80, options: ["default" => ''])]
    private ?string $RUBRIQUE = '';

    #[ORM\Column(type: 'integer', options: ["default" => 0])]
    private ?int $NBLIGNE = 0;

    #[ORM\Column(type: 'integer', options: ["default" => 0])]
    private ?int $PARUTION = 0;

    #[ORM\Column(type: 'decimal', precision: 10, scale: 2, options: ["default" => 0])]
    private ?float $DOMICILIATION = 0.0;

    #[ORM\Column(type: 'decimal', precision: 10, scale: 2, options: ["default" => 0])]
    private ?float $MONTANT = 0.0;

    public function getCode(): ?string
    {
        return $this->CODE;
    }

    public function setCode(string $CODE): static
    {
        $this->CODE = $CODE;

        return $this;
    }

    public function getCle(): ?int
    {
        return $this->CLE;
    }

    public function getDateCrea(): ?string
    {
        return $this->DATECREA;
    }

    public function setDateCrea(string $DATECREA): static
    {
        $this->DATECREA = $DATECREA;

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

    public function getEmail(): ?string
    {
        return $this->EMAIL;
    }

    public function setEmail(string $EMAIL): static
    {
        $this->EMAIL = $EMAIL;

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

    public function getCodePromo(): ?string
    {
        return $this->code_promo;
    }

    public function setCodePromo(string $code_promo): static
    {
        $this->code_promo = $code_promo;

        return $this;
    }

    public function getNumCb(): ?string
    {
        return $this->NUMCB;
    }

    public function setNumCb(string $NUMCB): static
    {
        $this->NUMCB = $NUMCB;

        return $this;
    }

    public function getMoisCb(): ?string
    {
        return $this->MOISCB;
    }

    public function setMoisCb(string $MOISCB): static
    {
        $this->MOISCB = $MOISCB;

        return $this;
    }

    public function getAnneeCb(): ?string
    {
        return $this->ANNEECB;
    }

    public function setAnneeCb(string $ANNEECB): static
    {
        $this->ANNEECB = $ANNEECB;

        return $this;
    }

    public function getNomCb(): ?string
    {
        return $this->NOMCB;
    }

    public function setNomCb(string $NOMCB): static
    {
        $this->NOMCB = $NOMCB;

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

    public function getRubrique(): ?string
    {
        return $this->RUBRIQUE;
    }

    public function setRubrique(string $RUBRIQUE): static
    {
        $this->RUBRIQUE = $RUBRIQUE;

        return $this;
    }

    public function getNbLigne(): ?int
    {
        return $this->NBLIGNE;
    }

    public function setNbLigne(int $NBLIGNE): static
    {
        $this->NBLIGNE = $NBLIGNE;

        return $this;
    }

    public function getParution(): ?int
    {
        return $this->PARUTION;
    }

    public function setParution(int $PARUTION): static
    {
        $this->PARUTION = $PARUTION;

        return $this;
    }

    public function getDomiciliation(): ?float
    {
        return $this->DOMICILIATION;
    }

    public function setDomiciliation(float $DOMICILIATION): static
    {
        $this->DOMICILIATION = $DOMICILIATION;

        return $this;
    }

    public function getMontant(): ?float
    {
        return $this->MONTANT;
    }

    public function setMontant(float $MONTANT): static
    {
        $this->MONTANT = $MONTANT;

        return $this;
    }
}
