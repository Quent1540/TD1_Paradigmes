<?php

require_once __DIR__ . '/../config/bootstrap.php';

use App\core\domain\entities\Specialite;

$entityManager = require __DIR__ . '/../config/bootstrap.php';

//Question 1. afficher la spécialité d'identifiant 1 : id, libellé, description.
$specialiteRepository = $entityManager->getRepository(Specialite::class);
$specialite = $specialiteRepository->find(1);

if ($specialite) {
    print "ID: " . $specialite->getId() . "\n";
    print "Libellé: " . $specialite->getLibelle() . "\n";
    print "Description: " . $specialite->getDescription() . "\n";
} else {
    print "Aucune spécialité trouvée avec l'identifiant 1." . "\n";
}