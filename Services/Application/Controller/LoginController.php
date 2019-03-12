<?php

namespace Services\Application\Controller;

class LoginController extends Controller
{

   public function logar($request, $response, $args) {

      return $this->view->render($response, 'login', [
         'title' => 'Entre no Kanban',
         'stylesheets' => ['login']
      ]);
   }
}