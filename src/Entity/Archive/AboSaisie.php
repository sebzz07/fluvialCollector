<?php

namespace App\Entity\Archive;

use App\Repository\Archive\AboSaisieRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AboSaisieRepository::class)]
class AboSaisie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: Types::BIGINT)]
    private ?string $CLE = null;

    #[ORM\Column(length: 10)]
    private ?string $DATE = null;

    #[ORM\Column(length: 1)]
    private ?string $ETAT = null;

    #[ORM\Column]
    private ?int $ETAPE = null;

    #[ORM\Column(length: 40)]
    private ?string $NOM = null;

    #[ORM\Column(length: 40)]
    private ?string $PRENOM = null;

    #[ORM\Column(length: 255)]
    private ?string $ADRESSE1 = null;

    #[ORM\Column(length: 40)]
    private ?string $ADRESSE2 = null;

    #[ORM\Column(length: 10)]
    private ?string $CP = null;

    #[ORM\Column(length: 40)]
    private ?string $VILLE = null;

    #[ORM\Column(length: 40)]
    private ?string $PAYS = null;

    #[ORM\Column(length: 20)]
    private ?string $TEL = null;

    #[ORM\Column(length: 20)]
    private ?string $FAX = null;

    #[ORM\Column(length: 80)]
    private ?string $EMAIL = null;

    #[ORM\Column(length: 255)]
    private ?string $RUBRIQUE = null;

    #[ORM\Column]
    private ?int $TOTAL = null;

    #[ORM\Column(length: 40)]
    private ?string $NOM2 = null;

    #[ORM\Column(length: 40)]
    private ?string $PRENOM2 = null;

    #[ORM\Column(length: 40)]
    private ?string $ADRESSE1_2 = null;

    #[ORM\Column(length: 40)]
    private ?string $ADRESSE2_2 = null;

    #[ORM\Column(length: 5)]
    private ?string $CP2 = null;

    #[ORM\Column(length: 40)]
    private ?string $VILLE2 = null;

    #[ORM\Column(length: 40)]
    private ?string $PAYS2 = null;

    #[ORM\Column(length: 255)]
    private ?string $SITUATION = null;

    #[ORM\Column(length: 40)]
    private ?string $PROMO = null;

    #[ORM\Column(length: 255)]
    private ?string $CADEAU = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $DATE_etape2 = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $DATE_etape3 = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $DATE_etape4 = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $DATE_etape5 = null;

    #[ORM\Column(length: 255)]
    private ?string $ip_user = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $mobile = null;

    #[ORM\Column(length: 255)]
    private ?string $CADEAU2ANS = null;

    public function getId(): ?string
    {
        return $this->CLE;
    }

    public function getDATE(): ?string
    {
        return $this->DATE;
    }

    public function setDATE(string $DATE): static
    {
        $this->DATE = $DATE;

        return $this;
    }

    public function getETAT(): ?string
    {
        return $this->ETAT;
    }

    public function setETAT(string $ETAT): static
    {
        $this->ETAT = $ETAT;

        return $this;
    }

    public function getETAPE(): ?int
    {
        return $this->ETAPE;
    }

    public function setETAPE(int $ETAPE): static
    {
        $this->ETAPE = $ETAPE;

        return $this;
    }

    public function getNOM(): ?string
    {
        return $this->NOM;
    }

    public function setNOM(string $NOM): static
    {
        $this->NOM = $NOM;

        return $this;
    }

    public function getPRENOM(): ?string
    {
        return $this->PRENOM;
    }

    public function setPRENOM(string $PRENOM): static
    {
        $this->PRENOM = $PRENOM;

        return $this;
    }

    public function getADRESSE1(): ?string
    {
        return $this->ADRESSE1;
    }

    public function setADRESSE1(string $ADRESSE1): static
    {
        $this->ADRESSE1 = $ADRESSE1;

        return $this;
    }

    public function getADRESSE2(): ?string
    {
        return $this->ADRESSE2;
    }

    public function setADRESSE2(string $ADRESSE2): static
    {
        $this->ADRESSE2 = $ADRESSE2;

        return $this;
    }

    public function getCP(): ?string
    {
        return $this->CP;
    }

    public function setCP(string $CP): static
    {
        $this->CP = $CP;

        return $this;
    }

    public function getVILLE(): ?string
    {
        return $this->VILLE;
    }

    public function setVILLE(string $VILLE): static
    {
        $this->VILLE = $VILLE;

        return $this;
    }

    public function getPAYS(): ?string
    {
        return $this->PAYS;
    }

    public function setPAYS(string $PAYS): static
    {
        $this->PAYS = $PAYS;

        return $this;
    }

    public function getTEL(): ?string
    {
        return $this->TEL;
    }

    public function setTEL(string $TEL): static
    {
        $this->TEL = $TEL;

        return $this;
    }

    public function getFAX(): ?string
    {
        return $this->FAX;
    }

    public function setFAX(string $FAX): static
    {
        $this->FAX = $FAX;

        return $this;
    }

    public function getEMAIL(): ?string
    {
        return $this->EMAIL;
    }

    public function setEMAIL(string $EMAIL): static
    {
        $this->EMAIL = $EMAIL;

        return $this;
    }

    public function getRUBRIQUE(): ?string
    {
        return $this->RUBRIQUE;
    }

    public function setRUBRIQUE(string $RUBRIQUE): static
    {
        $this->RUBRIQUE = $RUBRIQUE;

        return $this;
    }

    public function getTOTAL(): ?int
    {
        return $this->TOTAL;
    }

    public function setTOTAL(int $TOTAL): static
    {
        $this->TOTAL = $TOTAL;

        return $this;
    }

    public function getNOM2(): ?string
    {
        return $this->NOM2;
    }

    public function setNOM2(string $NOM2): static
    {
        $this->NOM2 = $NOM2;

        return $this;
    }

    public function getPRENOM2(): ?string
    {
        return $this->PRENOM2;
    }

    public function setPRENOM2(string $PRENOM2): static
    {
        $this->PRENOM2 = $PRENOM2;

        return $this;
    }

    public function getADRESSE12(): ?string
    {
        return $this->ADRESSE1_2;
    }

    public function setADRESSE12(string $ADRESSE1_2): static
    {
        $this->ADRESSE1_2 = $ADRESSE1_2;

        return $this;
    }

    public function getADRESSE22(): ?string
    {
        return $this->ADRESSE2_2;
    }

    public function setADRESSE22(string $ADRESSE2_2): static
    {
        $this->ADRESSE2_2 = $ADRESSE2_2;

        return $this;
    }

    public function getCP2(): ?string
    {
        return $this->CP2;
    }

    public function setCP2(string $CP2): static
    {
        $this->CP2 = $CP2;

        return $this;
    }

    public function getVILLE2(): ?string
    {
        return $this->VILLE2;
    }

    public function setVILLE2(string $VILLE2): static
    {
        $this->VILLE2 = $VILLE2;

        return $this;
    }

    public function getPAYS2(): ?string
    {
        return $this->PAYS2;
    }

    public function setPAYS2(string $PAYS2): static
    {
        $this->PAYS2 = $PAYS2;

        return $this;
    }

    public function getSITUATION(): ?string
    {
        return $this->SITUATION;
    }

    public function setSITUATION(string $SITUATION): static
    {
        $this->SITUATION = $SITUATION;

        return $this;
    }

    public function getPROMO(): ?string
    {
        return $this->PROMO;
    }

    public function setPROMO(string $PROMO): static
    {
        $this->PROMO = $PROMO;

        return $this;
    }

    public function getCADEAU(): ?string
    {
        return $this->CADEAU;
    }

    public function setCADEAU(string $CADEAU): static
    {
        $this->CADEAU = $CADEAU;

        return $this;
    }

    public function getDATEEtape2(): ?\DateTimeImmutable
    {
        return $this->DATE_etape2;
    }

    public function setDATEEtape2(\DateTimeImmutable $DATE_etape2): static
    {
        $this->DATE_etape2 = $DATE_etape2;

        return $this;
    }

    public function getDATEEtape3(): ?\DateTimeImmutable
    {
        return $this->DATE_etape3;
    }

    public function setDATEEtape3(\DateTimeImmutable $DATE_etape3): static
    {
        $this->DATE_etape3 = $DATE_etape3;

        return $this;
    }

    public function getDATEEtape4(): ?\DateTimeImmutable
    {
        return $this->DATE_etape4;
    }

    public function setDATEEtape4(\DateTimeImmutable $DATE_etape4): static
    {
        $this->DATE_etape4 = $DATE_etape4;

        return $this;
    }

    public function getDATEEtape5(): ?\DateTimeImmutable
    {
        return $this->DATE_etape5;
    }

    public function setDATEEtape5(\DateTimeImmutable $DATE_etape5): static
    {
        $this->DATE_etape5 = $DATE_etape5;

        return $this;
    }

    public function getIpUser(): ?string
    {
        return $this->ip_user;
    }

    public function setIpUser(string $ip_user): static
    {
        $this->ip_user = $ip_user;

        return $this;
    }

    public function getMobile(): ?int
    {
        return $this->mobile;
    }

    public function setMobile(int $mobile): static
    {
        $this->mobile = $mobile;

        return $this;
    }

    public function getCADEAU2ANS(): ?string
    {
        return $this->CADEAU2ANS;
    }

    public function setCADEAU2ANS(string $CADEAU2ANS): static
    {
        $this->CADEAU2ANS = $CADEAU2ANS;

        return $this;
    }
}
