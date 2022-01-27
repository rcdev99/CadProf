<?php

namespace CadProf\Entity;

/**
 * @Entity
 * @Table(name="professor")
 */
class Professor extends Pessoa
{
    
    /**
     * @Column(type="string")
     */
    private $titulacao;

    public function getId() :int
    {
        return $this->id;
    }

    public function getTitulacao()
    {
        return $this->titulacao;
    }

    public function setTitulacao(string $titulacao) 
    {
        $this->curso = $titulacao;
    }

}
