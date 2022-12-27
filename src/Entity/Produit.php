<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProduitRepository::class)]
class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Id_produit = null;

    #[ORM\Column(length: 255)]
    private ?string $Désignation = null;

    #[ORM\Column(length: 255)]
    private ?string $Description = null;

    #[ORM\Column]
    private ?float $Prix = null;

    #[ORM\Column]
    private ?int $Quantité = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdProduit(): ?string
    {
        return $this->Id_produit;
    }

    public function setIdProduit(string $Id_produit): self
    {
        $this->Id_produit = $Id_produit;

        return $this;
    }

    public function getDésignation(): ?string
    {
        return $this->Désignation;
    }

    public function setDésignation(string $Désignation): self
    {
        $this->Désignation = $Désignation;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->Prix;
    }

    public function setPrix(float $Prix): self
    {
        $this->Prix = $Prix;

        return $this;
    }

    public function getQuantité(): ?int
    {
        return $this->Quantité;
    }

    public function setQuantité(int $Quantité): self
    {
        $this->Quantité = $Quantité;

        return $this;
    }
}
