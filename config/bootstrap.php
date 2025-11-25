<?php

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\ORMSetup;
use Doctrine\ORM\EntityManager;

require_once __DIR__ . '/vendor/autoload.php';

$mapping_path = __DIR__  . '/../infra/mapping/';
$isDevMode=true;

$dbParams = parse_ini_file(__DIR__ . '/../config/specialite.ini');

$config = ORMSetup::createXMLMetadataConfiguration($mapping_path, $isDevMode);
$connection = DriverManager::getConnection($dbParams, $config);
$entityManager = new EntityManager($connection, $config);

return $entityManager;