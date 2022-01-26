<?php

namespace CadProf\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/** 
 * @Entity
 * @InheritanceType("JOINED")
 * @DiscriminatorColumn(name="tipo", type="string")
 * @DiscriminatorMap({"aluno" = "Aluno", "professor" = "Professor"}) 
 * */
abstract class Pessoa
{
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private $id;
    /**
     * @Column(type="string")
     */
    private $nome;
    /**
     * @Column(type="string")
     */
    private $cpf;
    /**
     * @Column(type="string")
     */
    private $email;
    /**
     * @OneToMany(targetEntity="Telefone", mappedBy="pessoa", cascade={"remove","persist"}, fetch="EAGER")
     */
    protected $telefones;
    
    public function __construct()
    {
        $this->telefones = new ArrayCollection();
    }

    public function getId() :int
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome(string $nome) 
    {
        $this->nome = $nome;
    }

    public function getCPF()
    {
        return $this->cpf;
    }

    public function setCPF(string $cpf) 
    {
        $this->cpf = $cpf;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail(string $email) 
    {
        $this->email = $email;
    }

    /**
     * @var Telefone $telefones
     */
    public function getTelefones() : Collection
    {
        return $this->telefones;
    }

    public function addTelefone(Telefone $telefone) : self
    {
        $this->telefones->add($telefone);
        $telefone->setProprietario($this);
        return $this;
    }
}
