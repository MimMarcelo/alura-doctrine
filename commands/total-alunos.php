<?php

use mimmarcelo\doctrine\entity\Aluno;
use mimmarcelo\doctrine\helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

// MODO #1
//$repository = $entityManager->getRepository(Aluno::class);
//
//$list = $repository->findAll();
//
//echo "Total de alunos: " . count($list);
// FIM MODO #1

// MODO #2
$classeAluno = Aluno::class;
$dql = "SELECT COUNT(a) FROM $classeAluno a";
$query = $entityManager->createQuery($dql);
$total = $query->getSingleScalarResult();
echo "Total de alunos: " . $total;
// FIM MODO #2