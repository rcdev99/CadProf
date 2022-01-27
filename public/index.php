<?php

require __DIR__ . '/../vendor/autoload.php';

use CadProf\Controller\iController;
use Nyholm\Psr7\Factory\Psr17Factory;
use Nyholm\Psr7Server\ServerRequestCreator;
use Psr\Http\Server\RequestHandlerInterface;

$rotas = require __DIR__ . '/../config/routes.php';
$caminho_url = strtolower($_SERVER['PATH_INFO']); 

if (!array_key_exists($caminho_url, $rotas)) {
    http_response_code(404);
    exit();
}

//iniciando sessão
session_start();

//Utilização de factor para obtenção dos dados do servidor
$psr17Factory = new Psr17Factory;

$creator = new ServerRequestCreator(
    $psr17Factory, // ServerRequestFactory
    $psr17Factory, // UriFactory
    $psr17Factory, // UploadedFileFactory
    $psr17Factory  // StreamFactory
);
//Obtendo dados da requisição
$request = $creator->fromGlobals();

//Obtendo class a ser instanciada através da rota mapeada
$classControladora = $rotas[$caminho_url];

//Injeção de depêndencias
/** @var ContainerInterface $container */
$container = require __DIR__ . '/../config/dependencies.php';

/**
 * @var RequestHandlerInterface $controlador
 */
//Instanciando classe de acordo com mapeamento
$controlador = $container->get($classControladora);

$response = $controlador->handle($request);

//Enviando os headers
foreach ($response->getHeaders() as $name => $values) {
    foreach ($values as $value) {
        header(sprintf('%s: %s', $name, $value), false);
    }
}
//Exibindo corpo da resposta
echo $response->getBody();