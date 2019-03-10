<?php

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Services\Application\Controller;


$app->redirect('/', 'login');
$app->get('/login', 'LoginController:logar')->setName('login');
$app->get('/home', 'HomeController:home')->setName('home'); //Kanban
$app->group('/tarefas', function (Slim\App $app) {
    $app->get('/listar', 'TaskController:listar')->setName('task.listagem'); //Listagem das tarefas do Kanban
    $app->get('/cadastrar', 'TaskController:cadastrar')->setName('task.cadastro'); //Cadastra tarefas do Kanban
});

$app->group('/admin', function (Slim\App $app) {
    $app->get('/infoDatabase', 'InfoAdminController:infoDatabase')->setName('admin.infoDatabase');
});