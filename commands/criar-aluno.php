<?php

use mimmarcelo\doctrine\entity\Aluno;
use mimmarcelo\doctrine\helper\EntityManagerFactory;
use mimmarcelo\doctrine\entity\Telefone;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$aluno = new Aluno();
$aluno->setNome($argv[1]); //$argv é uma variável do PHP que pega os valores após o nome do arquivo. Ex.: criar-aluno.php "Marcelo Júnior"

for($i = 2; $i < $argc; $i++){
    $num = $argv[$i];
    $tel = new Telefone();
    $tel->setNumero($num);
    
    $aluno->setTelefones($tel);
}

//Informa que o objeto $aluno está sendo observado para registro do banco
$entityManager->persist($aluno);

//Executa a instrução no banco de dados (inserir)
$entityManager->flush();

