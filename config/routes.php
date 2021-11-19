<?php

use CadProf\Controller\Home;
use CadProf\Controller\ListaAlunosController;
use CadProf\Controller\ListaProfessoresController;
use CadProf\Controller\SobreNosController;

return $rotas = [
    '/home' => Home::class,
    '/lista-alunos' => ListaAlunosController::class,
    '/lista-professores' => ListaProfessoresController::class,
    '/sobre-nos' => SobreNosController::class,
];