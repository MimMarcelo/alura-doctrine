<?php

namespace mimmarcelo\doctrine\entity;

/**
 * @Entity
 */
class Aluno {

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
    
    public function getId(): int {
        return $this->id;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): self {
        $this->nome = $nome;
        return $this;
    }


}
