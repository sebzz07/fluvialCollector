<?php

namespace App\Entity\Archive;

use App\Repository\Archive\BatArgusRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BatArgusRepository::class)]
class BatArgus
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer', options: ["default" => 0])]
    private ?int $CLE = 0;

    #[ORM\Column(length: 80, options: ["default" => ''])]
    private ?string $DESIGNATION = '';

    public function getCle(): ?int
    {
        return $this->CLE;
    }

    public function setCle(int $CLE): static
    {
        $this->CLE = $CLE;

        return $this;
    }

    public function getDesignation(): ?string
    {
        return $this->DESIGNATION;
    }

    public function setDesignation(string $DESIGNATION): static
    {
        $this->DESIGNATION = $DESIGNATION;

        return $this;
    }
}
