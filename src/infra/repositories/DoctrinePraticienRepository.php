<?php
declare(strict_types=1);

namespace App\infra\repositories;

use App\core\domain\entities\Praticien;
use App\core\domain\Repository\PraticienRepository;
use Doctrine\ORM\EntityRepository;

class DoctrinePraticienRepository extends EntityRepository implements PraticienRepository {
    public function find($id, $lockMode = null, $lockVersion = null): ?Praticien{
        return parent::find($id, $lockMode, $lockVersion);
    }


    public function findAll(): array{
        return parent::findAll();
    }

    public function save(Praticien $praticien): Praticien{
        $this->getEntityManager()->persist($praticien);
        $this->getEntityManager()->flush();
        return $praticien;
    }

    public function remove(Praticien $praticien): void{
        $this->getEntityManager()->remove($praticien);
        $this->getEntityManager()->flush();
    }
}