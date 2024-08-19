<?php

namespace App\Entity\Archive;

use App\Repository\Archive\AcastelemRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AcastelemRepository::class)]
class Acastelem
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'bigint')]
    private ?int $CLE = null;

    #[ORM\Column(length: 80, options: ["default" => ''])]
    private ?string $FAMILLE = '';

    #[ORM\Column(type: 'integer', options: ["default" => 0])]
    private ?int $CLEFAM = 0;

    #[ORM\Column(length: 80, options: ["default" => '0'])]
    private ?string $SSFAM = '0';

    #[ORM\Column(type: 'smallint', options: ["default" => 0])]
    private ?int $CLESSFAM = 0;

    #[ORM\Column(type: 'smallint', options: ["default" => 0])]
    private ?int $CLESOC = 0;

    #[ORM\Column(length: 10, options: ["default" => ''])]
    private ?string $CP = '';

    public function getCLE(): ?int
    {
        return $this->CLE;
    }

    public function getFAMILLE(): ?string
    {
        return $this->FAMILLE;
    }

    public function setFAMILLE(string $FAMILLE): static
    {
        $this->FAMILLE = $FAMILLE;

        return $this;
    }

    public function getCLEFAM(): ?int
    {
        return $this->CLEFAM;
    }

    public function setCLEFAM(int $CLEFAM): static
    {
        $this->CLEFAM = $CLEFAM;

        return $this;
    }

    public function getSSFAM(): ?string
    {
        return $this->SSFAM;
    }

    public function setSSFAM(string $SSFAM): static
    {
        $this->SSFAM = $SSFAM;

        return $this;
    }

    public function getCLESSFAM(): ?int
    {
        return $this->CLESSFAM;
    }

    public function setCLESSFAM(int $CLESSFAM): static
    {
        $this->CLESSFAM = $CLESSFAM;

        return $this;
    }

    public function getCLESOC(): ?int
    {
        return $this->CLESOC;
    }

    public function setCLESOC(int $CLESOC): static
    {
        $this->CLESOC = $CLESOC;

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
}
