<?php

namespace App\Entity;

use App\Repository\PlanRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PlanRepository::class)]
class Plan
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_IMMUTABLE)]
    private ?\DateTimeImmutable $year = null;

    #[ORM\Column(options: ['default'=> 'CURRENT_TIMESTAMP'])]
    private ?\DateTimeImmutable $fechaInicio = null;

    #[ORM\Column(type: Types::DATE_IMMUTABLE, nullable: true)]
    private ?\DateTimeImmutable $fechaCierre = null;

    #[ORM\Column(type: Types::DATE_IMMUTABLE, nullable: true)]
    private ?\DateTimeImmutable $fechaRevision = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getYear(): ?\DateTimeImmutable
    {
        return $this->year;
    }

    public function setYear(\DateTimeImmutable $year): static
    {
        $this->year = $year;

        return $this;
    }

    public function getFechaInicio(): ?\DateTimeImmutable
    {
        return $this->fechaInicio;
    }

    public function setFechaInicio(\DateTimeImmutable $fechaInicio): static
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    public function getFechaCierre(): ?\DateTimeImmutable
    {
        return $this->fechaCierre;
    }

    public function setFechaCierre(?\DateTimeImmutable $fechaCierre): static
    {
        $this->fechaCierre = $fechaCierre;

        return $this;
    }

    public function getFechaRevision(): ?\DateTimeImmutable
    {
        return $this->fechaRevision;
    }

    public function setFechaRevision(?\DateTimeImmutable $fechaRevision): static
    {
        $this->fechaRevision = $fechaRevision;

        return $this;
    }
}
