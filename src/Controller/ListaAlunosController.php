<?php

namespace CadProf\Controller;

use CadProf\Entity\Aluno;
use CadProf\Helper\RenderizadorDeHtmlTrait;
use Doctrine\ORM\EntityManagerInterface;
use Nyholm\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class ListaAlunosController implements RequestHandlerInterface
{
    use RenderizadorDeHtmlTrait;
    
    private $repositorioAlunos;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->repositorioAlunos = $entityManager->getRepository(Aluno::class);
    }

    public function handle(ServerRequestInterface $request) : ResponseInterface
    {

        $html = $this->renderizaHtml('lista-alunos.php', [
            'alunos' => $this->repositorioAlunos->findAll(),
            'titulo' => 'Alunos',
        ]);

        

        return new Response(200, [], $html);
    }
}