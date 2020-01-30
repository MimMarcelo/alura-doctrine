<?php

use mimmarcelo\doctrine\entity\Aluno;
use mimmarcelo\doctrine\entity\Telefone;
use mimmarcelo\doctrine\helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();
$repository = $entityManager->getRepository(Aluno::class);

//$classeAluno = Aluno::class;
//$dql = "SELECT aluno, telefones, cursos FROM $classeAluno aluno LEFT JOIN aluno.telefones telefones LEFT JOIN aluno.cursos cursos";
//echo "\n\n$dql\n\n";
//$query = $entityManager->createQuery($dql);

/** @var Aluno[] $alunos **/
//$alunos = $query->getResult();
$alunos = $repository->buscarCursosPorAluno();
//$alunos = $repository->findAll();

foreach ($alunos as $aluno) {
    $telefones = $aluno
            ->getTelefones()
            ->map(function(Telefone $telefone){
                return $telefone->getNumero();         
            })
            ->toArray();
    echo "ID: {$aluno->getId()}\n";
    echo "Nome: {$aluno->getNome()}\n";
    echo "Telefones: " . implode(", ", $telefones). "\n";
    echo "Cursos:\n";
    
    $cursos = $aluno->getCursos();
    foreach ($cursos as $curso) {
        echo "\tID: {$curso->getId()}";
        echo "\tNome: {$curso->getNome()}\n";
    }
    echo "\n";
}