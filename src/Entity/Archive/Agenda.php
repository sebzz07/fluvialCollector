<?php

namespace App\Entity\Archive;

use App\Repository\Archive\AgendaRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AgendaRepository::class)]
class Agenda
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'bigint')]
    private ?int $Agenda_Id = null;

    #[ORM\Column(length: 128)]
    private ?string $Agenda_Titre = null;

    #[ORM\Column(length: 128)]
    private ?string $Agenda_Lieu = null;

    #[ORM\Column(length: 255)]
    private ?string $Agenda_Periode = null;

    #[ORM\Column(type: 'text')]
    private ?string $Agenda_Texte = null;

    #[ORM\Column(length: 255)]
    private ?string $Agenda_Contact = null;

    #[ORM\Column(length: 255)]
    private ?string $Agenda_Site = null;

    #[ORM\Column(length: 255)]
    private ?string $Agenda_Email = null;

    #[ORM\Column(type: 'datetime')]
    private ?\DateTimeInterface $Agenda_Crea_Date = null;

    #[ORM\Column(type: 'integer')]
    private ?int $Agenda_Crea_UserId = null;

    #[ORM\Column(type: 'datetime')]
    private ?\DateTimeInterface $Agenda_Modif_Date = null;

    #[ORM\Column(type: 'integer')]
    private ?int $Agenda_Modif_UserId = null;

    #[ORM\Column(type: 'date')]
    private ?\DateTimeInterface $Agenda_Date_Publication = null;

    #[ORM\Column(type: 'date')]
    private ?\DateTimeInterface $Agenda_Date_Retrait = null;

    #[ORM\Column(type: 'date')]
    private ?\DateTimeInterface $Agenda_Date_Debut = null;

    #[ORM\Column(type: 'date')]
    private ?\DateTimeInterface $Agenda_Date_Fin = null;

    #[ORM\Column(type: 'integer')]
    private ?int $Agenda_Voieid = null;

    public function getAgendaId(): ?int
    {
        return $this->Agenda_Id;
    }

    public function getAgendaTitre(): ?string
    {
        return $this->Agenda_Titre;
    }

    public function setAgendaTitre(string $Agenda_Titre): static
    {
        $this->Agenda_Titre = $Agenda_Titre;

        return $this;
    }

    public function getAgendaLieu(): ?string
    {
        return $this->Agenda_Lieu;
    }

    public function setAgendaLieu(string $Agenda_Lieu): static
    {
        $this->Agenda_Lieu = $Agenda_Lieu;

        return $this;
    }

    public function getAgendaPeriode(): ?string
    {
        return $this->Agenda_Periode;
    }

    public function setAgendaPeriode(string $Agenda_Periode): static
    {
        $this->Agenda_Periode = $Agenda_Periode;

        return $this;
    }

    public function getAgendaTexte(): ?string
    {
        return $this->Agenda_Texte;
    }

    public function setAgendaTexte(string $Agenda_Texte): static
    {
        $this->Agenda_Texte = $Agenda_Texte;

        return $this;
    }

    public function getAgendaContact(): ?string
    {
        return $this->Agenda_Contact;
    }

    public function setAgendaContact(string $Agenda_Contact): static
    {
        $this->Agenda_Contact = $Agenda_Contact;

        return $this;
    }

    public function getAgendaSite(): ?string
    {
        return $this->Agenda_Site;
    }

    public function setAgendaSite(string $Agenda_Site): static
    {
        $this->Agenda_Site = $Agenda_Site;

        return $this;
    }

    public function getAgendaEmail(): ?string
    {
        return $this->Agenda_Email;
    }

    public function setAgendaEmail(string $Agenda_Email): static
    {
        $this->Agenda_Email = $Agenda_Email;

        return $this;
    }

    public function getAgendaCreaDate(): ?\DateTimeInterface
    {
        return $this->Agenda_Crea_Date;
    }

    public function setAgendaCreaDate(\DateTimeInterface $Agenda_Crea_Date): static
    {
        $this->Agenda_Crea_Date = $Agenda_Crea_Date;

        return $this;
    }

    public function getAgendaCreaUserId(): ?int
    {
        return $this->Agenda_Crea_UserId;
    }

    public function setAgendaCreaUserId(int $Agenda_Crea_UserId): static
    {
        $this->Agenda_Crea_UserId = $Agenda_Crea_UserId;

        return $this;
    }

    public function getAgendaModifDate(): ?\DateTimeInterface
    {
        return $this->Agenda_Modif_Date;
    }

    public function setAgendaModifDate(\DateTimeInterface $Agenda_Modif_Date): static
    {
        $this->Agenda_Modif_Date = $Agenda_Modif_Date;

        return $this;
    }

    public function getAgendaModifUserId(): ?int
    {
        return $this->Agenda_Modif_UserId;
    }

    public function setAgendaModifUserId(int $Agenda_Modif_UserId): static
    {
        $this->Agenda_Modif_UserId = $Agenda_Modif_UserId;

        return $this;
    }

    public function getAgendaDatePublication(): ?\DateTimeInterface
    {
        return $this->Agenda_Date_Publication;
    }

    public function setAgendaDatePublication(\DateTimeInterface $Agenda_Date_Publication): static
    {
        $this->Agenda_Date_Publication = $Agenda_Date_Publication;

        return $this;
    }

    public function getAgendaDateRetrait(): ?\DateTimeInterface
    {
        return $this->Agenda_Date_Retrait;
    }

    public function setAgendaDateRetrait(\DateTimeInterface $Agenda_Date_Retrait): static
    {
        $this->Agenda_Date_Retrait = $Agenda_Date_Retrait;

        return $this;
    }

    public function getAgendaDateDebut(): ?\DateTimeInterface
    {
        return $this->Agenda_Date_Debut;
    }

    public function setAgendaDateDebut(\DateTimeInterface $Agenda_Date_Debut): static
    {
        $this->Agenda_Date_Debut = $Agenda_Date_Debut;

        return $this;
    }

    public function getAgendaDateFin(): ?\DateTimeInterface
    {
        return $this->Agenda_Date_Fin;
    }

    public function setAgendaDateFin(\DateTimeInterface $Agenda_Date_Fin): static
    {
        $this->Agenda_Date_Fin = $Agenda_Date_Fin;

        return $this;
    }

    public function getAgendaVoieid(): ?int
    {
        return $this->Agenda_Voieid;
    }

    public function setAgendaVoieid(int $Agenda_Voieid): static
    {
        $this->Agenda_Voieid = $Agenda_Voieid;

        return $this;
    }
}
