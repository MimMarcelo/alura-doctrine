<?php

namespace mimmarcelo\doctrine\repository;

use Doctrine\ORM\EntityRepository;

class AlunoRepository extends EntityRepository {

    /**
     * Versão com DQL
     * @return array
     */
//use mimmarcelo\doctrine\entity\Aluno;
//    public function buscarCursosPorAluno(): array{
//
//        $classeAluno = Aluno::class;
//        $entityManager = $this->getEntityManager();
//        $dql = "SELECT a, t, c FROM $classeAluno a LEFT JOIN a.telefones t LEFT JOIN a.cursos c";
//        $query = $entityManager->createQuery($dql);
//
//        return $query->getResult();
//    }

    /**
     * Versão com QueryBuilder
     * @return type array
     */
    public function buscarCursosPorAluno(): array {
        
        $builder = $this->createQueryBuilder("a")
                ->leftJoin("a.telefones", "t")
                ->leftJoin("a.cursos", "c")
                ->addSelect("t")
                ->addSelect("c");
        
        $query = $builder->getQuery();
        return $query->getResult();
    }
}
