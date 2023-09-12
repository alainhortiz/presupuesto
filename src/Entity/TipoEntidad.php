<?php

namespace App\Entity;

use App\Repository\TipoEntidadRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TipoEntidadRepository::class)]
class TipoEntidad
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre = null;

    #[ORM\OneToMany(mappedBy: 'tipoEntidad', targetEntity: Entidad::class)]
    private Collection $entidades;

    public function __construct()
    {
        $this->entidades = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, Entidad>
     */
    public function getEntidades(): Collection
    {
        return $this->entidades;
    }

    public function addEntidade(Entidad $entidade): static
    {
        if (!$this->entidades->contains($entidade)) {
            $this->entidades->add($entidade);
            $entidade->setTipoEntidad($this);
        }

        return $this;
    }

    public function removeEntidade(Entidad $entidade): static
    {
        if ($this->entidades->removeElement($entidade)) {
            // set the owning side to null (unless already changed)
            if ($entidade->getTipoEntidad() === $this) {
                $entidade->setTipoEntidad(null);
            }
        }

        return $this;
    }
}
