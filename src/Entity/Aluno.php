<?php

namespace CadProf\Entity;

/**
 * @Entity
 * @Table(name="aluno") 
 */
class Aluno extends Pessoa
{
    
    /**
     * @Column(type="string")
     */
    private $curso;

    public function getId() :int
    {
        return $this->id;
    }

    public function getCurso()
    {
        return $this->curso;
    }

    public function setCurso(string $curso) 
    {
        $this->curso = $curso;
    }

}
