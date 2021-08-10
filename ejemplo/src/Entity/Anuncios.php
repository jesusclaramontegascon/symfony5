<?php

namespace App\Entity;

use App\Repository\AnunciosRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AnunciosRepository::class)
 */
class Anuncios
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $idanuncio;

    /**
     * @ORM\Column(type="string", length=256)
     */
    private $tituloanuncio;

    /**
     * @ORM\Column(type="string", length=256)
     */
    private $descripcionanuncio;

    /**
     * @ORM\Column(type="json")
     */
    private $fotojson = [];

    /**
     * @ORM\Column(type="integer")
     */
    private $tipovivienda;

    /**
     * @ORM\Column(type="float")
     */
    private $tamanovivienda;

    /**
     * @ORM\Column(type="float")
     */
    private $tamanojardin;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdanuncio(): ?int
    {
        return $this->idanuncio;
    }

    public function setIdanuncio(int $idanuncio): self
    {
        $this->idanuncio = $idanuncio;

        return $this;
    }

    public function getTituloanuncio(): ?string
    {
        return $this->tituloanuncio;
    }

    public function setTituloanuncio(string $tituloanuncio): self
    {
        $this->tituloanuncio = $tituloanuncio;

        return $this;
    }

    public function getDescripcionanuncio(): ?string
    {
        return $this->descripcionanuncio;
    }

    public function setDescripcionanuncio(string $descripcionanuncio): self
    {
        $this->descripcionanuncio = $descripcionanuncio;

        return $this;
    }

    public function getFotojson(): ?array
    {
        return $this->fotojson;
    }

    public function setFotojson(array $fotojson): self
    {
        $this->fotojson = $fotojson;

        return $this;
    }

    public function getTipovivienda(): ?int
    {
        return $this->tipovivienda;
    }

    public function setTipovivienda(int $tipovivienda): self
    {
        $this->tipovivienda = $tipovivienda;

        return $this;
    }

    public function getTamanovivienda(): ?string
    {
        return $this->tamanovivienda;
    }

    public function setTamanovivienda(string $tamanovivienda): self
    {
        $this->tamanovivienda = $tamanovivienda;

        return $this;
    }

    public function getTamanojardin(): ?float
    {
        return $this->tamanojardin;
    }

    public function setTamanojardin(float $tamanojardin): self
    {
        $this->tamanojardin = $tamanojardin;

        return $this;
    }
}
