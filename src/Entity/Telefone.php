<?php

namespace CadProf\Entity;

/**
 * @Entity
 * @Table(name="telefone")
 */
class Telefone
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
    private $numero;

    /**
     * @ManyToOne(targetEntity="Pessoa", inversedBy="telefones")
     * @JoinColumn(name="pessoa_id", referencedColumnName="id")
     */
    protected $pessoa;

    //Getters and Setters
    public function getId():int
    {
        return $this->id;
    }

    public function getNumero():string
    {
        return $this->numero;
    }

    public function setNumero(string $numero):void
    {
        $this->numero = $numero;
    }

    public function getPessoa(): Pessoa
    {
        return $this->pessoa;
    }

    public function setProprietario(Pessoa $pessoa):self
    {
        $this->pessoa = $pessoa;
        return $this;
    }
}