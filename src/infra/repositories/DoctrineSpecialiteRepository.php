<?php
declare(strict_types=1);

namespace App\infra\repositories;

use App\core\domain\entities\Specialite;
use App\core\domain\Repository\SpecialiteRepository;
use Doctrine\ORM\EntityRepository;

class DoctrineSpecialiteRepository extends EntityRepository implements SpecialiteRepository
{
    public function find($id, $lockMode = null, $lockVersion = null): ?Specialite
    {
        return parent::find($id, $lockMode, $lockVersion);
    }


    public function findAll(): array
    {
        return parent::findAll();
    }

    public function save(Specialite $specialite): Specialite
    {
        $this->getEntityManager()->persist($specialite);
        $this->getEntityManager()->flush();
        return $specialite;
    }

    public function remove(Specialite $specialite): void
    {
        $this->getEntityManager()->remove($specialite);
        $this->getEntityManager()->flush();
    }
}