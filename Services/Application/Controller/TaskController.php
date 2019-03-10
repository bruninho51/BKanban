<?php

namespace Services\Application\Controller;

use Services\Application\Config\Configuration;

class TaskController 
{
   public function listar($request, $response, $args) {
        echo 'Listagem';
        return $response;
   }

   public function cadastrar($request, $response, $args) {
        echo 'Cadastro';
        return $response;
   }
}