<?php

namespace App\Entity;

use App\Repository\EntidadRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: EntidadRepository::class)]
class Entidad
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(
        message: 'El nombre no puede estar en blanco',
    )]
    private ?string $nombre = null;

    #[ORM\Column]
    #[Assert\NotBlank(
        message: 'El centro de costo no puede estar en blanco',
    )]
    private ?int $centroCosto = null;

    #[ORM\Column]
    private ?bool $demanda = null;

    #[ORM\Column]
    private ?bool $modeloNivelActividad = null;

    #[ORM\Column]
    private ?bool $modeloColaboracionInternacionalActivosFijos = null;

    #[ORM\Column]
    private ?bool $modeloColaboracionInternacionalMediosTransportes = null;

    #[ORM\Column]
    private ?bool $modeloColaboracionInternacionalProyectos = null;

    #[ORM\Column]
    private ?bool $modeloDefensaSeguridadProteccion = null;

    #[ORM\Column]
    private ?bool $modeloDinamicaDemografica = null;

    #[ORM\Column]
    private ?bool $modeloInversiones = null;

    #[ORM\Column]
    private ?bool $modeloPortadoresCombustible = null;

    #[ORM\Column]
    private ?bool $modeloPortadoresEnergia = null;

    #[ORM\Column]
    private ?bool $modeloPortadoresServicios = null;

    #[ORM\Column]
    private ?bool $modeloSectorExterno = null;

    #[ORM\Column]
    private ?bool $modeloTransporte = null;

    #[ORM\ManyToOne(inversedBy: 'entidades')]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotBlank(
        message: 'Debe seleccionar un tipo de entidad',
    )]
    private ?TipoEntidad $tipoEntidad = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): static
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getCentroCosto(): ?int
    {
        return $this->centroCosto;
    }

    public function setCentroCosto(int $centroCosto): static
    {
        $this->centroCosto = $centroCosto;

        return $this;
    }

    public function isDemanda(): ?bool
    {
        return $this->demanda;
    }

    public function setDemanda(bool $demanda): static
    {
        $this->demanda = $demanda;

        return $this;
    }

    public function isModeloNivelActividad(): ?bool
    {
        return $this->modeloNivelActividad;
    }

    public function setModeloNivelActividad(bool $modeloNivelActividad): static
    {
        $this->modeloNivelActividad = $modeloNivelActividad;

        return $this;
    }

    public function isModeloColaboracionInternacionalActivosFijos(): ?bool
    {
        return $this->modeloColaboracionInternacionalActivosFijos;
    }

    public function setModeloColaboracionInternacionalActivosFijos(bool $modeloColaboracionInternacionalActivosFijos): static
    {
        $this->modeloColaboracionInternacionalActivosFijos = $modeloColaboracionInternacionalActivosFijos;

        return $this;
    }

    public function isModeloColaboracionInternacionalMediosTransportes(): ?bool
    {
        return $this->modeloColaboracionInternacionalMediosTransportes;
    }

    public function setModeloColaboracionInternacionalMediosTransportes(bool $modeloColaboracionInternacionalMediosTransportes): static
    {
        $this->modeloColaboracionInternacionalMediosTransportes = $modeloColaboracionInternacionalMediosTransportes;

        return $this;
    }

    public function isModeloColaboracionInternacionalProyectos(): ?bool
    {
        return $this->modeloColaboracionInternacionalProyectos;
    }

    public function setModeloColaboracionInternacionalProyectos(bool $modeloColaboracionInternacionalProyectos): static
    {
        $this->modeloColaboracionInternacionalProyectos = $modeloColaboracionInternacionalProyectos;

        return $this;
    }

    public function isModeloDefensaSeguridadProteccion(): ?bool
    {
        return $this->modeloDefensaSeguridadProteccion;
    }

    public function setModeloDefensaSeguridadProteccion(bool $modeloDefensaSeguridadProteccion): static
    {
        $this->modeloDefensaSeguridadProteccion = $modeloDefensaSeguridadProteccion;

        return $this;
    }

    public function isModeloDinamicaDemografica(): ?bool
    {
        return $this->modeloDinamicaDemografica;
    }

    public function setModeloDinamicaDemografica(bool $modeloDinamicaDemografica): static
    {
        $this->modeloDinamicaDemografica = $modeloDinamicaDemografica;

        return $this;
    }

    public function isModeloInversiones(): ?bool
    {
        return $this->modeloInversiones;
    }

    public function setModeloInversiones(bool $modeloInversiones): static
    {
        $this->modeloInversiones = $modeloInversiones;

        return $this;
    }

    public function isModeloPortadoresCombustible(): ?bool
    {
        return $this->modeloPortadoresCombustible;
    }

    public function setModeloPortadoresCombustible(bool $modeloPortadoresCombustible): static
    {
        $this->modeloPortadoresCombustible = $modeloPortadoresCombustible;

        return $this;
    }

    public function isModeloPortadoresEnergia(): ?bool
    {
        return $this->modeloPortadoresEnergia;
    }

    public function setModeloPortadoresEnergia(bool $modeloPortadoresEnergia): static
    {
        $this->modeloPortadoresEnergia = $modeloPortadoresEnergia;

        return $this;
    }

    public function isModeloPortadoresServicios(): ?bool
    {
        return $this->modeloPortadoresServicios;
    }

    public function setModeloPortadoresServicios(bool $modeloPortadoresServicios): static
    {
        $this->modeloPortadoresServicios = $modeloPortadoresServicios;

        return $this;
    }

    public function isModeloSectorExterno(): ?bool
    {
        return $this->modeloSectorExterno;
    }

    public function setModeloSectorExterno(bool $modeloSectorExterno): static
    {
        $this->modeloSectorExterno = $modeloSectorExterno;

        return $this;
    }

    public function isModeloTransporte(): ?bool
    {
        return $this->modeloTransporte;
    }

    public function setModeloTransporte(bool $modeloTransporte): static
    {
        $this->modeloTransporte = $modeloTransporte;

        return $this;
    }

    public function getTipoEntidad(): ?TipoEntidad
    {
        return $this->tipoEntidad;
    }

    public function setTipoEntidad(?TipoEntidad $tipoEntidad): static
    {
        $this->tipoEntidad = $tipoEntidad;

        return $this;
    }

}
