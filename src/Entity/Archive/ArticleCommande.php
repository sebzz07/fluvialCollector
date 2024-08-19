<?php

namespace App\Entity\Archive;

use App\Repository\Archive\ArticleCommandeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArticleCommandeRepository::class)]
class ArticleCommande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer', options: [ "unsigned" => true])]
    private ?int $id_article_commande = null;

    #[ORM\Column(type: 'integer')]
    private ?int $id_article = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(type: 'datetime')]
    private ?\DateTimeInterface $ctime = null;

    #[ORM\Column(type: 'datetime', options: ["default" => "CURRENT_TIMESTAMP", "onUpdate" => "CURRENT_TIMESTAMP"])]
    private ?\DateTimeInterface $mtime = null;

    #[ORM\Column(type: 'smallint', options: ["default" => 0])]
    private ?int $paye = 0;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $date_download = null;

    #[ORM\Column(length: 255, unique: true)]
    private ?string $code_download = null;

    public function getIdArticleCommande(): ?int
    {
        return $this->id_article_commande;
    }

    public function getIdArticle(): ?int
    {
        return $this->id_article;
    }

    public function setIdArticle(int $id_article): static
    {
        $this->id_article = $id_article;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getCtime(): ?\DateTimeInterface
    {
        return $this->ctime;
    }

    public function setCtime(\DateTimeInterface $ctime): static
    {
        $this->ctime = $ctime;

        return $this;
    }

    public function getMtime(): ?\DateTimeInterface
    {
        return $this->mtime;
    }

    public function setMtime(\DateTimeInterface $mtime): static
    {
        $this->mtime = $mtime;

        return $this;
    }

    public function getPaye(): ?int
    {
        return $this->paye;
    }

    public function setPaye(int $paye): static
    {
        $this->paye = $paye;

        return $this;
    }

    public function getDateDownload(): ?\DateTimeInterface
    {
        return $this->date_download;
    }

    public function setDateDownload(?\DateTimeInterface $date_download): static
    {
        $this->date_download = $date_download;

        return $this;
    }

    public function getCodeDownload(): ?string
    {
        return $this->code_download;
    }

    public function setCodeDownload(string $code_download): static
    {
        $this->code_download = $code_download;

        return $this;
    }
}
