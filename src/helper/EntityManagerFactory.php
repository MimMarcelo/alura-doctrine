<?php

namespace mimmarcelo\doctrine\helper;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

class EntityManagerFactory {

    public function getEntityManager(): EntityManagerInterface{
        $rootDir = __DIR__ . "/../..";
        $config = Setup::createAnnotationMetadataConfiguration([$rootDir."/src"], true);
        $connection = [
            'driver'   => 'pdo_mysql',
            'host'     => 'localhost',
            'user'     => 'root',
            'password' => 'Senha123#',
            'dbname'   => 'alura_doctrine'
        ];
        return EntityManager::create($connection, $config);
    }
}
