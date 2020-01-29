<?php

namespace mimmarcelo\doctrine\entity;

use Doctrine\Common\Collections\Collection;
use \Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity
 */
class Curso {
    
    /**
     * @Id
     * @GeneratedValue
     * @Column (type="integer")
     * @var type int
     */
    private $id;

    /**
     * @Column (type="string")
     * @var type string
     */
    private $nome;
    
    /**
     * @ManyToMany(targetEntity="Aluno", inversedBy="cursos");
     */
    private $alunos;
    
    public function __construct() {
        $this->alunos = new ArrayCollection();
    }
    
    public function getId(): int {
        return $this->id;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getAlunos(): Collection {
        return $this->alunos;
    }

    public function setNome(string $nome): self {
        $this->nome = $nome;
        return $this;
    }

    public function addAlunos($aluno): self {
        if(!$this->alunos->contains($aluno)){
            $this->alunos->add($aluno);
            $aluno->addCurso($this);
        }
        return $this;
    }


}
