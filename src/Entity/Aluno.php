<?php

namespace CadProf\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @Entity(repositoryClass="CadProf\Doctrine\Repository\AlunoRepository")
 */
class Aluno extends Pessoa
{
    
    /**
     * @Column(type="string")
     */
    private $curso;
    /**
     * @OneToMany(targetEntity="Telefone", mappedBy="aluno", cascade={"remove","persist"}, fetch="EAGER")
     */
    private $telefones;

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
