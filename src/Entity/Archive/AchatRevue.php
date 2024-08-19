<?php

namespace App\Entity\Archive;

use App\Repository\Archive\AchatRevueRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AchatRevueRepository::class)]
class AchatRevue
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $achr_id = null;

    #[ORM\Column(type: 'integer')]
    private ?int $achr_num_revue = null;

    #[ORM\Column(type: 'integer', options: ["default" => 0])]
    private ?int $achr_id_user = 0;

    #[ORM\Column(length: 3)]
    private ?string $achr_civ = null;

    #[ORM\Column(length: 255)]
    private ?string $achr_nom = null;

    #[ORM\Column(length: 255)]
    private ?string $achr_prenom = null;

    #[ORM\Column(length: 255)]
    private ?string $achr_email = null;

    #[ORM\Column(length: 255)]
    private ?string $achr_num_com = null;

    #[ORM\Column(length: 255)]
    private ?string $achr_paiement = null;

    #[ORM\Column(type: 'boolean')]
    private ?bool $achr_paye = null;

    #[ORM\Column(type: 'decimal', precision: 5, scale: 2)]
    private ?float $achr_montant = null;

    #[ORM\Column(type: 'datetime')]
    private ?\DateTimeInterface $achr_expiration = null;

    public function getAchrId(): ?int
    {
        return $this->achr_id;
    }

    public function getAchrNumRevue(): ?int
    {
        return $this->achr_num_revue;
    }

    public function setAchrNumRevue(int $achr_num_revue): static
    {
        $this->achr_num_revue = $achr_num_revue;

        return $this;
    }

    public function getAchrIdUser(): ?int
    {
        return $this->achr_id_user;
    }

    public function setAchrIdUser(int $achr_id_user): static
    {
        $this->achr_id_user = $achr_id_user;

        return $this;
    }

    public function getAchrCiv(): ?string
    {
        return $this->achr_civ;
    }

    public function setAchrCiv(string $achr_civ): static
    {
        $this->achr_civ = $achr_civ;

        return $this;
    }

    public function getAchrNom(): ?string
    {
        return $this->achr_nom;
    }

    public function setAchrNom(string $achr_nom): static
    {
        $this->achr_nom = $achr_nom;

        return $this;
    }

    public function getAchrPrenom(): ?string
    {
        return $this->achr_prenom;
    }

    public function setAchrPrenom(string $achr_prenom): static
    {
        $this->achr_prenom = $achr_prenom;

        return $this;
    }

    public function getAchrEmail(): ?string
    {
        return $this->achr_email;
    }

    public function setAchrEmail(string $achr_email): static
    {
        $this->achr_email = $achr_email;

        return $this;
    }

    public function getAchrNumCom(): ?string
    {
        return $this->achr_num_com;
    }

    public function setAchrNumCom(string $achr_num_com): static
    {
        $this->achr_num_com = $achr_num_com;

        return $this;
    }

    public function getAchrPaiement(): ?string
    {
        return $this->achr_paiement;
    }

    public function setAchrPaiement(string $achr_paiement): static
    {
        $this->achr_paiement = $achr_paiement;

        return $this;
    }

    public function getAchrPaye(): ?bool
    {
        return $this->achr_paye;
    }

    public function setAchrPaye(bool $achr_paye): static
    {
        $this->achr_paye = $achr_paye;

        return $this;
    }

    public function getAchrMontant(): ?float
    {
        return $this->achr_montant;
    }

    public function setAchrMontant(float $achr_montant): static
    {
        $this->achr_montant = $achr_montant;

        return $this;
    }

    public function getAchrExpiration(): ?\DateTimeInterface
    {
        return $this->achr_expiration;
    }

    public function setAchrExpiration(\DateTimeInterface $achr_expiration): static
    {
        $this->achr_expiration = $achr_expiration;

        return $this;
    }

    public function isAchrPaye(): ?bool
    {
        return $this->achr_paye;
    }
}
