<?php

namespace App\Entity\Archive;

use App\Repository\BapBateauxRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BapBateauxRepository::class)]
class BapBateaux
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_societe = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $actif = null;

    #[ORM\Column(length: 255)]
    private ?string $devise = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse = null;

    #[ORM\Column(length: 255)]
    private ?string $complement = null;

    #[ORM\Column(length: 255)]
    private ?string $cp = null;

    #[ORM\Column(length: 255)]
    private ?string $ville = null;

    #[ORM\Column(length: 255)]
    private ?string $region = null;

    #[ORM\Column]
    private ?int $voie_eau1 = null;

    #[ORM\Column]
    private ?int $voie_eau2 = null;

    #[ORM\Column]
    private ?int $voie_eau3 = null;

    #[ORM\Column]
    private ?int $voie_eau4 = null;

    #[ORM\Column]
    private ?int $voie_eau5 = null;

    #[ORM\Column]
    private ?int $voie_eau6 = null;

    #[ORM\Column]
    private ?int $promenade = null;

    #[ORM\Column(length: 255)]
    private ?string $promenade_capacite = null;

    #[ORM\Column(length: 255)]
    private ?string $promenade_duree = null;

    #[ORM\Column(length: 255)]
    private ?string $promenade_tarif = null;

    #[ORM\Column]
    private ?int $restauration = null;

    #[ORM\Column(length: 255)]
    private ?string $restauration_capacite = null;

    #[ORM\Column(length: 255)]
    private ?string $restauration_duree = null;

    #[ORM\Column(length: 255)]
    private ?string $restauration_tarif = null;

    #[ORM\Column(length: 255)]
    private ?string $buffet = null;

    #[ORM\Column(length: 255)]
    private ?string $buffet_capacite = null;

    #[ORM\Column(length: 255)]
    private ?string $buffet_duree = null;

    #[ORM\Column(length: 255)]
    private ?string $buffet_tarif = null;

    #[ORM\Column]
    private ?int $couchage = null;

    #[ORM\Column(length: 255)]
    private ?string $couchage_capacite = null;

    #[ORM\Column(length: 255)]
    private ?string $couchage_duree = null;

    #[ORM\Column(length: 255)]
    private ?string $couchage_tarif = null;

    #[ORM\Column]
    private ?int $couchage_aquai = null;

    #[ORM\Column]
    private ?int $couchage_navigant = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $circuit_navigation = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $autres_infos = null;

    #[ORM\Column(length: 255)]
    private ?string $ouvertures = null;

    #[ORM\Column(length: 255)]
    private ?string $date_maj = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $commentaire = null;

    #[ORM\Column(length: 255)]
    private ?string $geoloc_x = null;

    #[ORM\Column(length: 255)]
    private ?string $geoloc_y = null;

    #[ORM\Column]
    private ?int $rang_pub = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getIdSociete(): ?int
    {
        return $this->id_societe;
    }

    public function setIdSociete(int $id_societe): static
    {
        $this->id_societe = $id_societe;

        return $this;
    }

    public function getActif(): ?int
    {
        return $this->actif;
    }

    public function setActif(int $actif): static
    {
        $this->actif = $actif;

        return $this;
    }

    public function getDevise(): ?string
    {
        return $this->devise;
    }

    public function setDevise(string $devise): static
    {
        $this->devise = $devise;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getComplement(): ?string
    {
        return $this->complement;
    }

    public function setComplement(string $complement): static
    {
        $this->complement = $complement;

        return $this;
    }

    public function getCp(): ?string
    {
        return $this->cp;
    }

    public function setCp(string $cp): static
    {
        $this->cp = $cp;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): static
    {
        $this->ville = $ville;

        return $this;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(string $region): static
    {
        $this->region = $region;

        return $this;
    }

    public function getVoieEau1(): ?int
    {
        return $this->voie_eau1;
    }

    public function setVoieEau1(int $voie_eau1): static
    {
        $this->voie_eau1 = $voie_eau1;

        return $this;
    }

    public function getVoieEau2(): ?int
    {
        return $this->voie_eau2;
    }

    public function setVoieEau2(int $voie_eau2): static
    {
        $this->voie_eau2 = $voie_eau2;

        return $this;
    }

    public function getVoieEau3(): ?int
    {
        return $this->voie_eau3;
    }

    public function setVoieEau3(int $voie_eau3): static
    {
        $this->voie_eau3 = $voie_eau3;

        return $this;
    }

    public function getVoieEau4(): ?int
    {
        return $this->voie_eau4;
    }

    public function setVoieEau4(int $voie_eau4): static
    {
        $this->voie_eau4 = $voie_eau4;

        return $this;
    }

    public function getVoieEau5(): ?int
    {
        return $this->voie_eau5;
    }

    public function setVoieEau5(int $voie_eau5): static
    {
        $this->voie_eau5 = $voie_eau5;

        return $this;
    }

    public function getVoieEau6(): ?int
    {
        return $this->voie_eau6;
    }

    public function setVoieEau6(int $voie_eau6): static
    {
        $this->voie_eau6 = $voie_eau6;

        return $this;
    }

    public function getPromenade(): ?int
    {
        return $this->promenade;
    }

    public function setPromenade(int $promenade): static
    {
        $this->promenade = $promenade;

        return $this;
    }

    public function getPromenadeCapacite(): ?string
    {
        return $this->promenade_capacite;
    }

    public function setPromenadeCapacite(string $promenade_capacite): static
    {
        $this->promenade_capacite = $promenade_capacite;

        return $this;
    }

    public function getPromenadeDuree(): ?string
    {
        return $this->promenade_duree;
    }

    public function setPromenadeDuree(string $promenade_duree): static
    {
        $this->promenade_duree = $promenade_duree;

        return $this;
    }

    public function getPromenadeTarif(): ?string
    {
        return $this->promenade_tarif;
    }

    public function setPromenadeTarif(string $promenade_tarif): static
    {
        $this->promenade_tarif = $promenade_tarif;

        return $this;
    }

    public function getRestauration(): ?int
    {
        return $this->restauration;
    }

    public function setRestauration(int $restauration): static
    {
        $this->restauration = $restauration;

        return $this;
    }

    public function getRestaurationCapacite(): ?string
    {
        return $this->restauration_capacite;
    }

    public function setRestaurationCapacite(string $restauration_capacite): static
    {
        $this->restauration_capacite = $restauration_capacite;

        return $this;
    }

    public function getRestaurationDuree(): ?string
    {
        return $this->restauration_duree;
    }

    public function setRestaurationDuree(string $restauration_duree): static
    {
        $this->restauration_duree = $restauration_duree;

        return $this;
    }

    public function getRestaurationTarif(): ?string
    {
        return $this->restauration_tarif;
    }

    public function setRestaurationTarif(string $restauration_tarif): static
    {
        $this->restauration_tarif = $restauration_tarif;

        return $this;
    }

    public function getBuffet(): ?string
    {
        return $this->buffet;
    }

    public function setBuffet(string $buffet): static
    {
        $this->buffet = $buffet;

        return $this;
    }

    public function getBuffetCapacite(): ?string
    {
        return $this->buffet_capacite;
    }

    public function setBuffetCapacite(string $buffet_capacite): static
    {
        $this->buffet_capacite = $buffet_capacite;

        return $this;
    }

    public function getBuffetDuree(): ?string
    {
        return $this->buffet_duree;
    }

    public function setBuffetDuree(string $buffet_duree): static
    {
        $this->buffet_duree = $buffet_duree;

        return $this;
    }

    public function getBuffetTarif(): ?string
    {
        return $this->buffet_tarif;
    }

    public function setBuffetTarif(string $buffet_tarif): static
    {
        $this->buffet_tarif = $buffet_tarif;

        return $this;
    }

    public function getCouchage(): ?int
    {
        return $this->couchage;
    }

    public function setCouchage(int $couchage): static
    {
        $this->couchage = $couchage;

        return $this;
    }

    public function getCouchageCapacite(): ?string
    {
        return $this->couchage_capacite;
    }

    public function setCouchageCapacite(string $couchage_capacite): static
    {
        $this->couchage_capacite = $couchage_capacite;

        return $this;
    }

    public function getCouchageDuree(): ?string
    {
        return $this->couchage_duree;
    }

    public function setCouchageDuree(string $couchage_duree): static
    {
        $this->couchage_duree = $couchage_duree;

        return $this;
    }

    public function getCouchageTarif(): ?string
    {
        return $this->couchage_tarif;
    }

    public function setCouchageTarif(string $couchage_tarif): static
    {
        $this->couchage_tarif = $couchage_tarif;

        return $this;
    }

    public function getCouchageAquai(): ?int
    {
        return $this->couchage_aquai;
    }

    public function setCouchageAquai(int $couchage_aquai): static
    {
        $this->couchage_aquai = $couchage_aquai;

        return $this;
    }

    public function getCouchageNavigant(): ?int
    {
        return $this->couchage_navigant;
    }

    public function setCouchageNavigant(int $couchage_navigant): static
    {
        $this->couchage_navigant = $couchage_navigant;

        return $this;
    }

    public function getCircuitNavigation(): ?string
    {
        return $this->circuit_navigation;
    }

    public function setCircuitNavigation(string $circuit_navigation): static
    {
        $this->circuit_navigation = $circuit_navigation;

        return $this;
    }

    public function getAutresInfos(): ?string
    {
        return $this->autres_infos;
    }

    public function setAutresInfos(string $autres_infos): static
    {
        $this->autres_infos = $autres_infos;

        return $this;
    }

    public function getOuvertures(): ?string
    {
        return $this->ouvertures;
    }

    public function setOuvertures(string $ouvertures): static
    {
        $this->ouvertures = $ouvertures;

        return $this;
    }

    public function getDateMaj(): ?string
    {
        return $this->date_maj;
    }

    public function setDateMaj(string $date_maj): static
    {
        $this->date_maj = $date_maj;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(string $commentaire): static
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getGeolocX(): ?string
    {
        return $this->geoloc_x;
    }

    public function setGeolocX(string $geoloc_x): static
    {
        $this->geoloc_x = $geoloc_x;

        return $this;
    }

    public function getGeolocY(): ?string
    {
        return $this->geoloc_y;
    }

    public function setGeolocY(string $geoloc_y): static
    {
        $this->geoloc_y = $geoloc_y;

        return $this;
    }

    public function getRangPub(): ?int
    {
        return $this->rang_pub;
    }

    public function setRangPub(int $rang_pub): static
    {
        $this->rang_pub = $rang_pub;

        return $this;
    }
}
