<?php

namespace CadProf\Infra;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Setup;

class EntityManagerCreator
{
    /**
     * @return EntityManagerInterface
     */
    public function getEntityManager(): EntityManagerInterface
    {
        $paths = [__DIR__ . '/../Entity'];
        $isDevMode = false;

        $config = Setup::createAnnotationMetadataConfiguration(
            $paths,
            $isDevMode
        );

        $con = [
            'driver' => 'pdo_pgsql',
            'host' => 'localhost',
            'dbname' => 'cadprof',
            'user' => 'postgres',
            'password' => 'RcDev999@',
        ];

        return EntityManager::create($con, $config);
    }
}
