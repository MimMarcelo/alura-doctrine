<?php

namespace mimmarcelo\doctrine\entity;

/**
 * @Entity
 */
class Telefone {

    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private $id;

    /**
     * @Column(type="string")
     */
    private $numero;

    /**
     * @ManyToOne(targetEntity="Aluno")
     */
    private $aluno;

    function getId(): int {
        return $this->id;
    }

    function getNumero(): string {
        return $this->numero;
    }

    public function getAluno(): Aluno {
        return $this->aluno;
    }

    function setNumero($numero): self {
        $this->numero = $numero;
        return $this;
    }

    public function setAluno(Aluno $aluno): self {
        $this->aluno = $aluno;
        return $this;
    }

}
