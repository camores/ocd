<?php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "../app/vendor/autoload.php";

$sqlite = array(
	'driver' => 'pdo_sqlite',
	'path' => '../app/data/ocd.db'
);

$em = EntityManager::create($sqlite, Setup::createAnnotationMetadataConfiguration(array('../app/lib/Model'), true));
