<?php
declare(strict_types=1);

namespace App\core\domain\Repository;

use App\core\domain\entities\Praticien;

interface PraticienRepository{
    public function find(int $id): ?Praticien;
    public function findAll(): array;
    public function save(Praticien $praticien): Praticien;
    public function remove(Praticien $praticien): void;
}