<?php

namespace App\Entity;

use App\Repository\CommandesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommandesRepository::class)]
class Commandes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Id_cmd = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $Date_cmd = null;

    #[ORM\Column]
    private ?float $Montant = null;

    #[ORM\Column(length: 255)]
    private ?string $Etat = null;

    #[ORM\ManyToOne(inversedBy: 'commandes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Client $id_client = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdCmd(): ?string
    {
        return $this->Id_cmd;
    }

    public function setIdCmd(string $Id_cmd): self
    {
        $this->Id_cmd = $Id_cmd;

        return $this;
    }

    public function getDateCmd(): ?\DateTimeInterface
    {
        return $this->Date_cmd;
    }

    public function setDateCmd(\DateTimeInterface $Date_cmd): self
    {
        $this->Date_cmd = $Date_cmd;

        return $this;
    }

    public function getMontant(): ?float
    {
        return $this->Montant;
    }

    public function setMontant(float $Montant): self
    {
        $this->Montant = $Montant;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->Etat;
    }

    public function setEtat(string $Etat): self
    {
        $this->Etat = $Etat;

        return $this;
    }

    public function getIdClient(): ?Client
    {
        return $this->id_client;
    }

    public function setIdClient(?Client $id_client): self
    {
        $this->id_client = $id_client;

        return $this;
    }
}
