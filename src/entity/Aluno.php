<?php

namespace mimmarcelo\doctrine\entity;

use Doctrine\Common\Collections\Collection;
use \Doctrine\Common\Collections\ArrayCollection;
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

    /**
     * @OneToMany(targetEntity="Telefone", mappedBy="aluno", cascade={"remove", "persist"})
     */
    private $telefones;

    public function __construct() {
        $this->telefones = new ArrayCollection();
    }

    public function getId(): int {
        return $this->id;
    }

    public function getNome(): string {
        return $this->nome;
    }

    function getTelefones(): Collection {
        return $this->telefones;
    }

    public function setNome(string $nome): self {
        $this->nome = $nome;
        return $this;
    }

    function setTelefones(Telefone $telefones): self {
        $this->telefones->add($telefones);
        $telefones->setAluno($this);
        return $this;
    }

}
