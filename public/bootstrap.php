<?php

use Doctrine\MongoDB\Connection;
use Doctrine\ODM\MongoDB\Configuration;
use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Mapping\Driver\AnnotationDriver;

if ( ! file_exists($file = __DIR__.'/../app/vendor/autoload.php')) 
{
	throw new RuntimeException('Install dependencies to run this script.');
}

require_once $file;

$loader->add('Model', __DIR__);

$connection = new Connection();
$config = new Configuration();

$config->setProxyDir(__DIR__ . '/Proxies');
$config->setProxyNamespace('Proxies');
$config->setHydratorDir(__DIR__ . '/Hydrators');
$config->setHydratorNamespace('Hydrators');
$config->setDefaultDB('ocd_db');

$config->setMetadataDriverImpl(AnnotationDriver::create(__DIR__ . '/../app/lib/Model'));

AnnotationDriver::registerAnnotationClasses();

$dm = DocumentManager::create($connection, $config);
