<?php

namespace App\Entity\Archive;

use App\Repository\Archive\AcastAdrRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AcastAdrRepository::class)]
class AcastAdr
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer', options: ["default" => 0])]
    private ?int $CLE = 0;

    #[ORM\Column(type: 'smallint', options: ["default" => 0])]
    private ?int $TYPE = 0;

    #[ORM\Column(type: 'smallint', options: ["default" => 0])]
    private ?int $FABRICANT = 0;

    #[ORM\Column(length: 80, options: ["default" => ''])]
    private ?string $SOCIETE = '';

    #[ORM\Column(length: 80, options: ["default" => ''])]
    private ?string $ADRESSE1 = '';

    #[ORM\Column(length: 80, options: ["default" => ''])]
    private ?string $ADRESSE2 = '';

    #[ORM\Column(length: 10, options: ["default" => ''])]
    private ?string $CP = '';

    #[ORM\Column(type: 'smallint', options: ["default" => 0])]
    private ?int $CLE_REGION = 0;

    #[ORM\Column(length: 40, options: ["default" => ''])]
    private ?string $VILLE = '';

    #[ORM\Column(length: 20, options: ["default" => ''])]
    private ?string $TEL = '';

    #[ORM\Column(length: 20, options: ["default" => ''])]
    private ?string $FAX = '';

    #[ORM\Column(length: 80, options: ["default" => ''])]
    private ?string $EMAIL = '';

    #[ORM\Column(length: 80, options: ["default" => ''])]
    private ?string $SITE = '';

    #[ORM\Column(type: 'smallint', options: ["default" => 0])]
    private ?int $MOUILLAGE1 = 0;

    #[ORM\Column(type: 'smallint', options: ["default" => 0])]
    private ?int $MOUILLAGE2 = 0;

    #[ORM\Column(type: 'smallint', options: ["default" => 0])]
    private ?int $APPONTEMENT1 = 0;

    #[ORM\Column(type: 'smallint', options: ["default" => 0])]
    private ?int $APPONTEMENT2 = 0;

    #[ORM\Column(type: 'smallint', options: ["default" => 0])]
    private ?int $MOTEUR1 = 0;

    #[ORM\Column(type: 'smallint', options: ["default" => 0])]
    private ?int $MOTEUR2 = 0;

    #[ORM\Column(type: 'smallint', options: ["default" => 0])]
    private ?int $NAVIGATION1 = 0;

    #[ORM\Column(type: 'smallint', options: ["default" => 0])]
    private ?int $NAVIGATION2 = 0;

    #[ORM\Column(type: 'smallint', options: ["default" => 0])]
    private ?int $EAU1 = 0;

    #[ORM\Column(type: 'smallint', options: ["default" => 0])]
    private ?int $EAU2 = 0;

    #[ORM\Column(type: 'smallint', options: ["default" => 0])]
    private ?int $ELECTRICITE1 = 0;

    #[ORM\Column(type: 'smallint', options: ["default" => 0])]
    private ?int $ELECTRICITE2 = 0;

    #[ORM\Column(type: 'smallint', options: ["default" => 0])]
    private ?int $CHAUFFAGE1 = 0;

    #[ORM\Column(type: 'smallint', options: ["default" => 0])]
    private ?int $CHAUFFAGE2 = 0;

    #[ORM\Column(type: 'smallint', options: ["default" => 0])]
    private ?int $MANUTENTION1 = 0;

    #[ORM\Column(type: 'smallint', options: ["default" => 0])]
    private ?int $MANUTENTION2 = 0;

    #[ORM\Column(type: 'smallint', options: ["default" => 0])]
    private ?int $ENTRETIEN1 = 0;

    #[ORM\Column(type: 'smallint', options: ["default" => 0])]
    private ?int $ENTRETIEN2 = 0;

    #[ORM\Column(type: 'smallint', options: ["default" => 0])]
    private ?int $AMENAGEMENT1 = 0;

    #[ORM\Column(type: 'smallint', options: ["default" => 0])]
    private ?int $AMENAGEMENT2 = 0;

    #[ORM\Column(type: 'smallint', options: ["default" => 0])]
    private ?int $MATERIEL1 = 0;

    #[ORM\Column(type: 'smallint', options: ["default" => 0])]
    private ?int $MATERIEL2 = 0;

    #[ORM\Column(type: 'smallint', options: ["default" => 0])]
    private ?int $PUB = 0;

    public function getCLE(): ?int
    {
        return $this->CLE;
    }

    public function getTYPE(): ?int
    {
        return $this->TYPE;
    }

    public function setTYPE(int $TYPE): static
    {
        $this->TYPE = $TYPE;

        return $this;
    }

    public function getFABRICANT(): ?int
    {
        return $this->FABRICANT;
    }

    public function setFABRICANT(int $FABRICANT): static
    {
        $this->FABRICANT = $FABRICANT;

        return $this;
    }

    public function getSOCIETE(): ?string
    {
        return $this->SOCIETE;
    }

    public function setSOCIETE(string $SOCIETE): static
    {
        $this->SOCIETE = $SOCIETE;

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

    public function getCLE_REGION(): ?int
    {
        return $this->CLE_REGION;
    }

    public function setCLE_REGION(int $CLE_REGION): static
    {
        $this->CLE_REGION = $CLE_REGION;

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

    public function getSITE(): ?string
    {
        return $this->SITE;
    }

    public function setSITE(string $SITE): static
    {
        $this->SITE = $SITE;

        return $this;
    }

    public function getMOUILLAGE1(): ?int
    {
        return $this->MOUILLAGE1;
    }

    public function setMOUILLAGE1(int $MOUILLAGE1): static
    {
        $this->MOUILLAGE1 = $MOUILLAGE1;

        return $this;
    }

    public function getMOUILLAGE2(): ?int
    {
        return $this->MOUILLAGE2;
    }

    public function setMOUILLAGE2(int $MOUILLAGE2): static
    {
        $this->MOUILLAGE2 = $MOUILLAGE2;

        return $this;
    }

    public function getAPPONTEMENT1(): ?int
    {
        return $this->APPONTEMENT1;
    }

    public function setAPPONTEMENT1(int $APPONTEMENT1): static
    {
        $this->APPONTEMENT1 = $APPONTEMENT1;
        return $this;
    }

    public function getCLEREGION(): ?int
    {
        return $this->CLE_REGION;
    }

    public function setCLEREGION(int $CLE_REGION): static
    {
        $this->CLE_REGION = $CLE_REGION;

        return $this;
    }

    public function getAPPONTEMENT2(): ?int
    {
        return $this->APPONTEMENT2;
    }

    public function setAPPONTEMENT2(int $APPONTEMENT2): static
    {
        $this->APPONTEMENT2 = $APPONTEMENT2;

        return $this;
    }

    public function getMOTEUR1(): ?int
    {
        return $this->MOTEUR1;
    }

    public function setMOTEUR1(int $MOTEUR1): static
    {
        $this->MOTEUR1 = $MOTEUR1;

        return $this;
    }

    public function getMOTEUR2(): ?int
    {
        return $this->MOTEUR2;
    }

    public function setMOTEUR2(int $MOTEUR2): static
    {
        $this->MOTEUR2 = $MOTEUR2;

        return $this;
    }

    public function getNAVIGATION1(): ?int
    {
        return $this->NAVIGATION1;
    }

    public function setNAVIGATION1(int $NAVIGATION1): static
    {
        $this->NAVIGATION1 = $NAVIGATION1;

        return $this;
    }

    public function getNAVIGATION2(): ?int
    {
        return $this->NAVIGATION2;
    }

    public function setNAVIGATION2(int $NAVIGATION2): static
    {
        $this->NAVIGATION2 = $NAVIGATION2;

        return $this;
    }

    public function getEAU1(): ?int
    {
        return $this->EAU1;
    }

    public function setEAU1(int $EAU1): static
    {
        $this->EAU1 = $EAU1;

        return $this;
    }

    public function getEAU2(): ?int
    {
        return $this->EAU2;
    }

    public function setEAU2(int $EAU2): static
    {
        $this->EAU2 = $EAU2;

        return $this;
    }

    public function getELECTRICITE1(): ?int
    {
        return $this->ELECTRICITE1;
    }

    public function setELECTRICITE1(int $ELECTRICITE1): static
    {
        $this->ELECTRICITE1 = $ELECTRICITE1;

        return $this;
    }

    public function getELECTRICITE2(): ?int
    {
        return $this->ELECTRICITE2;
    }

    public function setELECTRICITE2(int $ELECTRICITE2): static
    {
        $this->ELECTRICITE2 = $ELECTRICITE2;

        return $this;
    }

    public function getCHAUFFAGE1(): ?int
    {
        return $this->CHAUFFAGE1;
    }

    public function setCHAUFFAGE1(int $CHAUFFAGE1): static
    {
        $this->CHAUFFAGE1 = $CHAUFFAGE1;

        return $this;
    }

    public function getCHAUFFAGE2(): ?int
    {
        return $this->CHAUFFAGE2;
    }

    public function setCHAUFFAGE2(int $CHAUFFAGE2): static
    {
        $this->CHAUFFAGE2 = $CHAUFFAGE2;

        return $this;
    }

    public function getMANUTENTION1(): ?int
    {
        return $this->MANUTENTION1;
    }

    public function setMANUTENTION1(int $MANUTENTION1): static
    {
        $this->MANUTENTION1 = $MANUTENTION1;

        return $this;
    }

    public function getMANUTENTION2(): ?int
    {
        return $this->MANUTENTION2;
    }

    public function setMANUTENTION2(int $MANUTENTION2): static
    {
        $this->MANUTENTION2 = $MANUTENTION2;

        return $this;
    }

    public function getENTRETIEN1(): ?int
    {
        return $this->ENTRETIEN1;
    }

    public function setENTRETIEN1(int $ENTRETIEN1): static
    {
        $this->ENTRETIEN1 = $ENTRETIEN1;

        return $this;
    }

    public function getENTRETIEN2(): ?int
    {
        return $this->ENTRETIEN2;
    }

    public function setENTRETIEN2(int $ENTRETIEN2): static
    {
        $this->ENTRETIEN2 = $ENTRETIEN2;

        return $this;
    }

    public function getAMENAGEMENT1(): ?int
    {
        return $this->AMENAGEMENT1;
    }

    public function setAMENAGEMENT1(int $AMENAGEMENT1): static
    {
        $this->AMENAGEMENT1 = $AMENAGEMENT1;

        return $this;
    }

    public function getAMENAGEMENT2(): ?int
    {
        return $this->AMENAGEMENT2;
    }

    public function setAMENAGEMENT2(int $AMENAGEMENT2): static
    {
        $this->AMENAGEMENT2 = $AMENAGEMENT2;

        return $this;
    }

    public function getMATERIEL1(): ?int
    {
        return $this->MATERIEL1;
    }

    public function setMATERIEL1(int $MATERIEL1): static
    {
        $this->MATERIEL1 = $MATERIEL1;

        return $this;
    }

    public function getMATERIEL2(): ?int
    {
        return $this->MATERIEL2;
    }

    public function setMATERIEL2(int $MATERIEL2): static
    {
        $this->MATERIEL2 = $MATERIEL2;

        return $this;
    }

    public function getPUB(): ?int
    {
        return $this->PUB;
    }

    public function setPUB(int $PUB): static
    {
        $this->PUB = $PUB;

        return $this;
    }
}