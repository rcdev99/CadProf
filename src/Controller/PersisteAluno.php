<?php

namespace CadProf\Controller;

use CadProf\Entity\Aluno;
use CadProf\Entity\Telefone;
use CadProf\Helper\RenderizadorDeHtmlTrait;
use Doctrine\ORM\EntityManagerInterface;
use Nyholm\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class PersisteAluno implements RequestHandlerInterface
{
    /**
     * @var \Doctrine\ORM\EntityManagerInterface
     */
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {

        $aluno = new Aluno();
        $aluno->setNome("Teste");
        $aluno->setCPF("444.333.2222-01");
        $aluno->setEmail("umemail@gmail.com");
        $aluno->setCurso("The best Course is the Life");
        
        $telefone1 = new Telefone();
        $telefone1->setNumero("11 943931746");
        $telefone1->setProprietario($aluno);

        $telefone2 = new Telefone();
        $telefone2->setNumero("11 917464393");
        $telefone2->setProprietario($aluno);
        
        $aluno->addTelefone($telefone1);
        $aluno->addTelefone($telefone2);

        $this->entityManager->persist($aluno);
        $this->entityManager->flush();

        return new Response(302, ['Location' => '/lista-alunos']);
    }

}