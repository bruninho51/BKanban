<?php

namespace Services\Application\Controller;

class HomeController extends Controller
{

   public function home($request, $response, $args) {

      return $this->view->render($response, 'home', [
         'title' => 'Kanban',
         'stylesheets' => ['home'],
         'scripts' => ['kanban']
      ]);
   }
}