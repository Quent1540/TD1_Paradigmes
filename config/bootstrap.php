<?php

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\ORMSetup;
use Doctrine\ORM\EntityManager;

require_once __DIR__ . '/../vendor/autoload.php';

$mapping_paths = [__DIR__  . '/../src/infra/mapping'];
$isDevMode=true;

$dbParams = parse_ini_file(__DIR__ . '/../config/specialite.ini');

$config = ORMSetup::createXMLMetadataConfiguration($mapping_paths, $isDevMode);
$connection = DriverManager::getConnection($dbParams);
$entityManager = new EntityManager($connection, $config);

return $entityManager;

