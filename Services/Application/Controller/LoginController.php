<?php

namespace Services\Application\Controller;
use \Interop\Container\ContainerInterface as ContainerInterface;

class LoginController 
{
   private $container;

   public function __construct(ContainerInterface $container)
   {
      $this->container = $container;
   }

   public function logar($request, $response, $args) {
      
      $data['container'] = $this->container;
      $data['response'] = $response;
      $data['title'] = 'Entre no Kanban';
      $data['css'] = 'login';
      $data['footer'] = [];

      return $this->container->renderer->render($response, 'login.php', $data);
   }
}