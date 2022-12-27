<?php

namespace App\Entity;

use App\Repository\PanierRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PanierRepository::class)]
class Panier
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Id_panier = null;

    #[ORM\Column(length: 255)]
    private ?string $nbr_piéce = null;

    #[ORM\Column]
    private ?float $total_prix = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdPanier(): ?string
    {
        return $this->Id_panier;
    }

    public function setIdPanier(string $Id_panier): self
    {
        $this->Id_panier = $Id_panier;

        return $this;
    }

    public function getNbrPiéce(): ?string
    {
        return $this->nbr_piéce;
    }

    public function setNbrPiéce(string $nbr_piéce): self
    {
        $this->nbr_piéce = $nbr_piéce;

        return $this;
    }

    public function getTotalPrix(): ?float
    {
        return $this->total_prix;
    }

    public function setTotalPrix(float $total_prix): self
    {
        $this->total_prix = $total_prix;

        return $this;
    }
}
