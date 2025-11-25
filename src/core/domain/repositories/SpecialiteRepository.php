<?php
declare(strict_types=1);

namespace App\core\domain\Repository;


use App\core\domain\entities\Specialite;

interface SpecialiteRepository
{
    public function find(int $id): ?Specialite;
    public function findAll(): array;
    public function save(Specialite $specialite): Specialite;
    public function remove(Specialite $specialite): void;
}
