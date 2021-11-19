<?php

namespace CadProf\Controller;

use CadProf\Helper\RenderizadorDeHtmlTrait;
use Nyholm\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class Home implements RequestHandlerInterface
{
    use RenderizadorDeHtmlTrait;
    
    public function handle(ServerRequestInterface $request) : ResponseInterface
    {
        $html = $this->renderizaHtml('home.php', []);

        return new Response(200, [], $html);
    }
}