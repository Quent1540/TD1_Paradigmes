<?php

require_once __DIR__ . '/config/bootstrap.php';

use App\Core\Domain\Entities\Specialite;

$entityManager = require __DIR__ . '/config/bootstrap.php';

$specialiteRepository = $entityManager->getRepository(Specialite::class);
$specialite = $specialiteRepository->findSpecialiteById(1);

if ($specialite) {
    print "ID: " . $specialite->getId() . "\n";
    print "Libellé: " . $specialite->getLibelle() . "\n";
    print "Description: " . $specialite->getDescription() . "\n";
} else {
    print "Aucune spécialité trouvée avec l'identifiant 1." . "\n";
}