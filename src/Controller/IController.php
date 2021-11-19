<?php

namespace CadProf\Controller;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

interface iController
{
    public function processaRequisicao(ServerRequestInterface $request): ResponseInterface;
}