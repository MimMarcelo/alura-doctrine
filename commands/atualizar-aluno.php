<?php

use mimmarcelo\doctrine\entity\Aluno;
use mimmarcelo\doctrine\helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$repository = $entityManager->getRepository(Aluno::class);

$id = $argv[1];
$novoNome = $argv[2];
/**
 * @var Aluno[] $aluno
 */
$aluno = $repository->find($id);
$aluno->setNome($novoNome);

$entityManager->flush();