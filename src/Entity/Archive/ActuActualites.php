<?php

namespace App\Entity\Archive;

use App\Repository\Archive\ActuActualitesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ActuActualitesRepository::class)]
class ActuActualites
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $Actu_Id = null;

    #[ORM\Column(length: 250, options: ["default" => ''])]
    private ?string $Actu_Titre = '';

    #[ORM\Column(type: 'text')]
    private ?string $Actu_TexteIntro = null;

    #[ORM\Column(type: 'text')]
    private ?string $Actu_TexteLong = null;

    #[ORM\Column(length: 250, options: ["default" => ''])]
    private ?string $Actu_Image = '';

    #[ORM\Column(length: 250, options: ["default" => ''])]
    private ?string $Actu_ImageLegende = '';

    #[ORM\Column(type: 'integer', options: ["default" => 0])]
    private ?int $Actu_ImageLegende_Display = 0;

    #[ORM\Column(type: 'date', options: ["default" => '0000-00-00'])]
    private ?\DateTimeInterface $Actu_Date_Publication = null;

    #[ORM\Column(type: 'date', options: ["default" => '0000-00-00'])]
    private ?\DateTimeInterface $Actu_Date_Retrait = null;

    #[ORM\Column(type: 'datetime', options: ["default" => '0000-00-00 00:00:00'])]
    private ?\DateTimeInterface $Actu_Crea_Date = null;

    #[ORM\Column(type: 'integer', options: ["default" => 0])]
    private ?int $Actu_Crea_UserId = 0;

    #[ORM\Column(type: 'datetime', options: ["default" => '0000-00-00 00:00:00'])]
    private ?\DateTimeInterface $Actu_Modif_Date = null;

    #[ORM\Column(type: 'integer', options: ["default" => 0])]
    private ?int $Actu_Modif_UserId = 0;

    public function getActuId(): ?int
    {
        return $this->Actu_Id;
    }

    public function getActuTitre(): ?string
    {
        return $this->Actu_Titre;
    }

    public function setActuTitre(string $Actu_Titre): static
    {
        $this->Actu_Titre = $Actu_Titre;

        return $this;
    }

    public function getActuTexteIntro(): ?string
    {
        return $this->Actu_TexteIntro;
    }

    public function setActuTexteIntro(string $Actu_TexteIntro): static
    {
        $this->Actu_TexteIntro = $Actu_TexteIntro;

        return $this;
    }

    public function getActuTexteLong(): ?string
    {
        return $this->Actu_TexteLong;
    }

    public function setActuTexteLong(string $Actu_TexteLong): static
    {
        $this->Actu_TexteLong = $Actu_TexteLong;

        return $this;
    }

    public function getActuImage(): ?string
    {
        return $this->Actu_Image;
    }

    public function setActuImage(string $Actu_Image): static
    {
        $this->Actu_Image = $Actu_Image;

        return $this;
    }

    public function getActuImageLegende(): ?string
    {
        return $this->Actu_ImageLegende;
    }

    public function setActuImageLegende(string $Actu_ImageLegende): static
    {
        $this->Actu_ImageLegende = $Actu_ImageLegende;

        return $this;
    }

    public function getActuImageLegendeDisplay(): ?int
    {
        return $this->Actu_ImageLegende_Display;
    }

    public function setActuImageLegendeDisplay(int $Actu_ImageLegende_Display): static
    {
        $this->Actu_ImageLegende_Display = $Actu_ImageLegende_Display;

        return $this;
    }

    public function getActuDatePublication(): ?\DateTimeInterface
    {
        return $this->Actu_Date_Publication;
    }

    public function setActuDatePublication(\DateTimeInterface $Actu_Date_Publication): static
    {
        $this->Actu_Date_Publication = $Actu_Date_Publication;

        return $this;
    }

    public function getActuDateRetrait(): ?\DateTimeInterface
    {
        return $this->Actu_Date_Retrait;
    }

    public function setActuDateRetrait(\DateTimeInterface $Actu_Date_Retrait): static
    {
        $this->Actu_Date_Retrait = $Actu_Date_Retrait;

        return $this;
    }

    public function getActuCreaDate(): ?\DateTimeInterface
    {
        return $this->Actu_Crea_Date;
    }

    public function setActuCreaDate(\DateTimeInterface $Actu_Crea_Date): static
    {
        $this->Actu_Crea_Date = $Actu_Crea_Date;

        return $this;
    }

    public function getActuCreaUserId(): ?int
    {
        return $this->Actu_Crea_UserId;
    }

    public function setActuCreaUserId(int $Actu_Crea_UserId): static
    {
        $this->Actu_Crea_UserId = $Actu_Crea_UserId;

        return $this;
    }

    public function getActuModifDate(): ?\DateTimeInterface
    {
        return $this->Actu_Modif_Date;
    }

    public function setActuModifDate(\DateTimeInterface $Actu_Modif_Date): static
    {
        $this->Actu_Modif_Date = $Actu_Modif_Date;

        return $this;
    }

    public function getActuModifUserId(): ?int
    {
        return $this->Actu_Modif_UserId;
    }

    public function setActuModifUserId(int $Actu_Modif_UserId): static
    {
        $this->Actu_Modif_UserId = $Actu_Modif_UserId;

        return $this;
    }
}
