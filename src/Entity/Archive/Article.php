<?php

namespace App\Entity\Archive;

use App\Repository\Archive\ArticleRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArticleRepository::class)]
class Article
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: Types::BIGINT)]
    private ?string $IDARTICLE = null;

    #[ORM\Column(length: 4)]
    private ?string $ANNEE = null;

    #[ORM\Column(type: Types::BIGINT)]
    private ?string $NUM_REVUE = null;

    #[ORM\Column(type: Types::BIGINT)]
    private ?string $PAGES1 = null;

    #[ORM\Column(type: Types::BIGINT)]
    private ?string $PAGES2 = null;

    #[ORM\Column(length: 80)]
    private ?string $RUBRIQUE = null;

    #[ORM\Column(length: 80)]
    private ?string $SSRUBRIQUE = null;

    #[ORM\Column(length: 250)]
    private ?string $INTITULE1 = null;

    #[ORM\Column(length: 255)]
    private ?string $INTITULE2 = null;

    #[ORM\Column(length: 50)]
    private ?string $AUTEUR1 = null;

    #[ORM\Column(length: 50)]
    private ?string $AUTEUR2 = null;

    #[ORM\Column(length: 80)]
    private ?string $BATEAU = null;

    #[ORM\Column(length: 15)]
    private ?string $LONGUEUR = null;

    #[ORM\Column(length: 80)]
    private ?string $CONSTRUCTEUR = null;

    #[ORM\Column(length: 80)]
    private ?string $VD1 = null;

    #[ORM\Column(length: 80)]
    private ?string $VD2 = null;

    #[ORM\Column(length: 80)]
    private ?string $VD3 = null;

    #[ORM\Column(length: 80)]
    private ?string $VD4 = null;

    #[ORM\Column]
    private ?int $ID_LONGUEUR = null;

    #[ORM\Column]
    private ?int $IDCONSTRUCT = null;

    #[ORM\Column(type: Types::BIGINT)]
    private ?string $IDBATEAU = null;

    #[ORM\Column]
    private ?int $IDRUBRIQUE1 = null;

    #[ORM\Column]
    private ?int $IDRUBRIQUE2 = null;

    #[ORM\Column]
    private ?int $IDVOIEDEAU1 = null;

    #[ORM\Column]
    private ?int $IDVOIEDEAU2 = null;

    #[ORM\Column]
    private ?int $IDVOIEDEAU3 = null;

    #[ORM\Column]
    private ?int $IDVOIEDEAU4 = null;

    #[ORM\Column]
    private ?int $IDAUTEUR1 = null;

    #[ORM\Column]
    private ?int $IDAUTEUR2 = null;

    #[ORM\Column(length: 15)]
    private ?string $MOIS = null;

    #[ORM\Column(length: 80)]
    private ?string $DEVISE = null;

    #[ORM\Column]
    private ?bool $is_murmure = null;

    #[ORM\Column(length: 255)]
    private ?string $attachedfile = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $DATE_MURM = null;

    #[ORM\Column(length: 255)]
    private ?string $INTITULE3 = null;

    #[ORM\Column(length: 255)]
    private ?string $EMAILTO1 = null;

    #[ORM\Column]
    private ?bool $is_published = null;

    #[ORM\Column(length: 255)]
    private ?string $HEURE = null;

    #[ORM\Column]
    private ?int $IDBASSIN1 = null;

    #[ORM\Column]
    private ?int $IDBASSIN2 = null;

    #[ORM\Column]
    private ?int $IDBASSIN3 = null;

    #[ORM\Column]
    private ?int $IDBASSIN4 = null;

    #[ORM\Column]
    private ?int $IDBASSIN5 = null;

    #[ORM\Column]
    private ?int $IDBASSIN6 = null;

    #[ORM\Column]
    private ?int $IDBASSIN7 = null;

    #[ORM\Column]
    private ?int $IDBASSIN8 = null;

    #[ORM\Column(length: 255)]
    private ?string $CodeDownload = null;

    public function getId(): ?string
    {
        return $this->IDARTICLE;
    }

    public function getANNEE(): ?string
    {
        return $this->ANNEE;
    }

    public function setANNEE(string $ANNEE): static
    {
        $this->ANNEE = $ANNEE;

        return $this;
    }

    public function getNUMREVUE(): ?string
    {
        return $this->NUM_REVUE;
    }

    public function setNUMREVUE(string $NUM_REVUE): static
    {
        $this->NUM_REVUE = $NUM_REVUE;

        return $this;
    }

    public function getPAGES1(): ?string
    {
        return $this->PAGES1;
    }

    public function setPAGES1(string $PAGES1): static
    {
        $this->PAGES1 = $PAGES1;

        return $this;
    }

    public function getPAGES2(): ?string
    {
        return $this->PAGES2;
    }

    public function setPAGES2(string $PAGES2): static
    {
        $this->PAGES2 = $PAGES2;

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

    public function getSSRUBRIQUE(): ?string
    {
        return $this->SSRUBRIQUE;
    }

    public function setSSRUBRIQUE(string $SSRUBRIQUE): static
    {
        $this->SSRUBRIQUE = $SSRUBRIQUE;

        return $this;
    }

    public function getINTITULE1(): ?string
    {
        return $this->INTITULE1;
    }

    public function setINTITULE1(string $INTITULE1): static
    {
        $this->INTITULE1 = $INTITULE1;

        return $this;
    }

    public function getINTITULE2(): ?string
    {
        return $this->INTITULE2;
    }

    public function setINTITULE2(string $INTITULE2): static
    {
        $this->INTITULE2 = $INTITULE2;

        return $this;
    }

    public function getAUTEUR1(): ?string
    {
        return $this->AUTEUR1;
    }

    public function setAUTEUR1(string $AUTEUR1): static
    {
        $this->AUTEUR1 = $AUTEUR1;

        return $this;
    }

    public function getAUTEUR2(): ?string
    {
        return $this->AUTEUR2;
    }

    public function setAUTEUR2(string $AUTEUR2): static
    {
        $this->AUTEUR2 = $AUTEUR2;

        return $this;
    }

    public function getBATEAU(): ?string
    {
        return $this->BATEAU;
    }

    public function setBATEAU(string $BATEAU): static
    {
        $this->BATEAU = $BATEAU;

        return $this;
    }

    public function getLONGUEUR(): ?string
    {
        return $this->LONGUEUR;
    }

    public function setLONGUEUR(string $LONGUEUR): static
    {
        $this->LONGUEUR = $LONGUEUR;

        return $this;
    }

    public function getCONSTRUCTEUR(): ?string
    {
        return $this->CONSTRUCTEUR;
    }

    public function setCONSTRUCTEUR(string $CONSTRUCTEUR): static
    {
        $this->CONSTRUCTEUR = $CONSTRUCTEUR;

        return $this;
    }

    public function getVD1(): ?string
    {
        return $this->VD1;
    }

    public function setVD1(string $VD1): static
    {
        $this->VD1 = $VD1;

        return $this;
    }

    public function getVD2(): ?string
    {
        return $this->VD2;
    }

    public function setVD2(string $VD2): static
    {
        $this->VD2 = $VD2;

        return $this;
    }

    public function getVD3(): ?string
    {
        return $this->VD3;
    }

    public function setVD3(string $VD3): static
    {
        $this->VD3 = $VD3;

        return $this;
    }

    public function getVD4(): ?string
    {
        return $this->VD4;
    }

    public function setVD4(string $VD4): static
    {
        $this->VD4 = $VD4;

        return $this;
    }

    public function getIDLONGUEUR(): ?int
    {
        return $this->ID_LONGUEUR;
    }

    public function setIDLONGUEUR(int $ID_LONGUEUR): static
    {
        $this->ID_LONGUEUR = $ID_LONGUEUR;

        return $this;
    }

    public function getIDCONSTRUCT(): ?int
    {
        return $this->IDCONSTRUCT;
    }

    public function setIDCONSTRUCT(int $IDCONSTRUCT): static
    {
        $this->IDCONSTRUCT = $IDCONSTRUCT;

        return $this;
    }

    public function getIDBATEAU(): ?string
    {
        return $this->IDBATEAU;
    }

    public function setIDBATEAU(string $IDBATEAU): static
    {
        $this->IDBATEAU = $IDBATEAU;

        return $this;
    }

    public function getIDRUBRIQUE1(): ?int
    {
        return $this->IDRUBRIQUE1;
    }

    public function setIDRUBRIQUE1(int $IDRUBRIQUE1): static
    {
        $this->IDRUBRIQUE1 = $IDRUBRIQUE1;

        return $this;
    }

    public function getIDRUBRIQUE2(): ?int
    {
        return $this->IDRUBRIQUE2;
    }

    public function setIDRUBRIQUE2(int $IDRUBRIQUE2): static
    {
        $this->IDRUBRIQUE2 = $IDRUBRIQUE2;

        return $this;
    }

    public function getIDVOIEDEAU1(): ?int
    {
        return $this->IDVOIEDEAU1;
    }

    public function setIDVOIEDEAU1(int $IDVOIEDEAU1): static
    {
        $this->IDVOIEDEAU1 = $IDVOIEDEAU1;

        return $this;
    }

    public function getIDVOIEDEAU2(): ?int
    {
        return $this->IDVOIEDEAU2;
    }

    public function setIDVOIEDEAU2(int $IDVOIEDEAU2): static
    {
        $this->IDVOIEDEAU2 = $IDVOIEDEAU2;

        return $this;
    }

    public function getIDVOIEDEAU3(): ?int
    {
        return $this->IDVOIEDEAU3;
    }

    public function setIDVOIEDEAU3(int $IDVOIEDEAU3): static
    {
        $this->IDVOIEDEAU3 = $IDVOIEDEAU3;

        return $this;
    }

    public function getIDVOIEDEAU4(): ?int
    {
        return $this->IDVOIEDEAU4;
    }

    public function setIDVOIEDEAU4(int $IDVOIEDEAU4): static
    {
        $this->IDVOIEDEAU4 = $IDVOIEDEAU4;

        return $this;
    }

    public function getIDAUTEUR1(): ?int
    {
        return $this->IDAUTEUR1;
    }

    public function setIDAUTEUR1(int $IDAUTEUR1): static
    {
        $this->IDAUTEUR1 = $IDAUTEUR1;

        return $this;
    }

    public function getIDAUTEUR2(): ?int
    {
        return $this->IDAUTEUR2;
    }

    public function setIDAUTEUR2(int $IDAUTEUR2): static
    {
        $this->IDAUTEUR2 = $IDAUTEUR2;

        return $this;
    }

    public function getMOIS(): ?string
    {
        return $this->MOIS;
    }

    public function setMOIS(string $MOIS): static
    {
        $this->MOIS = $MOIS;

        return $this;
    }

    public function getDEVISE(): ?string
    {
        return $this->DEVISE;
    }

    public function setDEVISE(string $DEVISE): static
    {
        $this->DEVISE = $DEVISE;

        return $this;
    }

    public function isIsMurmure(): ?bool
    {
        return $this->is_murmure;
    }

    public function setIsMurmure(bool $is_murmure): static
    {
        $this->is_murmure = $is_murmure;

        return $this;
    }

    public function getAttachedfile(): ?string
    {
        return $this->attachedfile;
    }

    public function setAttachedfile(string $attachedfile): static
    {
        $this->attachedfile = $attachedfile;

        return $this;
    }

    public function getDATEMURM(): ?\DateTimeImmutable
    {
        return $this->DATE_MURM;
    }

    public function setDATEMURM(\DateTimeImmutable $DATE_MURM): static
    {
        $this->DATE_MURM = $DATE_MURM;

        return $this;
    }

    public function getINTITULE3(): ?string
    {
        return $this->INTITULE3;
    }

    public function setINTITULE3(string $INTITULE3): static
    {
        $this->INTITULE3 = $INTITULE3;

        return $this;
    }

    public function getEMAILTO1(): ?string
    {
        return $this->EMAILTO1;
    }

    public function setEMAILTO1(string $EMAILTO1): static
    {
        $this->EMAILTO1 = $EMAILTO1;

        return $this;
    }

    public function isIsPublished(): ?bool
    {
        return $this->is_published;
    }

    public function setIsPublished(bool $is_published): static
    {
        $this->is_published = $is_published;

        return $this;
    }

    public function getHEURE(): ?string
    {
        return $this->HEURE;
    }

    public function setHEURE(string $HEURE): static
    {
        $this->HEURE = $HEURE;

        return $this;
    }

    public function getIDBASSIN1(): ?int
    {
        return $this->IDBASSIN1;
    }

    public function setIDBASSIN1(int $IDBASSIN1): static
    {
        $this->IDBASSIN1 = $IDBASSIN1;

        return $this;
    }

    public function getIDBASSIN2(): ?int
    {
        return $this->IDBASSIN2;
    }

    public function setIDBASSIN2(int $IDBASSIN2): static
    {
        $this->IDBASSIN2 = $IDBASSIN2;

        return $this;
    }

    public function getIDBASSIN3(): ?int
    {
        return $this->IDBASSIN3;
    }

    public function setIDBASSIN3(int $IDBASSIN3): static
    {
        $this->IDBASSIN3 = $IDBASSIN3;

        return $this;
    }

    public function getIDBASSIN4(): ?int
    {
        return $this->IDBASSIN4;
    }

    public function setIDBASSIN4(int $IDBASSIN4): static
    {
        $this->IDBASSIN4 = $IDBASSIN4;

        return $this;
    }

    public function getIDBASSIN5(): ?int
    {
        return $this->IDBASSIN5;
    }

    public function setIDBASSIN5(int $IDBASSIN5): static
    {
        $this->IDBASSIN5 = $IDBASSIN5;

        return $this;
    }

    public function getIDBASSIN6(): ?int
    {
        return $this->IDBASSIN6;
    }

    public function setIDBASSIN6(int $IDBASSIN6): static
    {
        $this->IDBASSIN6 = $IDBASSIN6;

        return $this;
    }

    public function getIDBASSIN7(): ?int
    {
        return $this->IDBASSIN7;
    }

    public function setIDBASSIN7(int $IDBASSIN7): static
    {
        $this->IDBASSIN7 = $IDBASSIN7;

        return $this;
    }

    public function getIDBASSIN8(): ?int
    {
        return $this->IDBASSIN8;
    }

    public function setIDBASSIN8(int $IDBASSIN8): static
    {
        $this->IDBASSIN8 = $IDBASSIN8;

        return $this;
    }

    public function getCodeDownload(): ?string
    {
        return $this->CodeDownload;
    }

    public function setCodeDownload(string $CodeDownload): static
    {
        $this->CodeDownload = $CodeDownload;

        return $this;
    }

    public function getIDARTICLE(): ?string
    {
        return $this->IDARTICLE;
    }
}
