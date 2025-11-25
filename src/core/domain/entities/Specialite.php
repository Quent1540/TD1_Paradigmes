<?php
declare(strict_types=1);

namespace App\core\domain\entities;

use Doctrine\ORM\Mapping as ORM;
use App\infra\repositories\DoctrineSpecialiteRepository; // Assurez-vous que ce namespace est bon pour votre repo

#[ORM\Entity(repositoryClass: DoctrineSpecialiteRepository::class)]
#[ORM\Table(name: "specialite")] // Optionnel : force le nom de la table si différent de la classe
class Specialite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private ?int $id = null;

    #[ORM\Column(type: "string", length: 255)]
    private string $libelle;

    #[ORM\Column(type: "text", nullable: true)]
    private ?string $description = null;

    // Getters et Setters...

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }
}