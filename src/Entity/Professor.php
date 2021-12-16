<?php

namespace CadProf\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @Entity(repositoryClass="CadProf\Doctrine\Repository\ProfessorRepository")
 */
class Professor extends Pessoa
{
    
    /**
     * @Column(type="string")
     */
    private $titulacao;
    /**
     * @OneToMany(targetEntity="Telefone", mappedBy="professor", cascade={"remove","persist"}, fetch="EAGER")
     */
    private $telefones;

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
