<?php

use mimmarcelo\doctrine\entity\Aluno;
use mimmarcelo\doctrine\helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$repository = $entityManager->getRepository(Aluno::class);

/**
 * @var Aluno[] $list
 */
$list = $repository->findAll();

foreach ($list as $aluno) {
    echo "<br>\nID: {$aluno->getId()} \nNome: {$aluno->getNome()}\n";
}