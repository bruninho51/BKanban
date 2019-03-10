<?php

namespace Services\Application\Controller;

use \Interop\Container\ContainerInterface as ContainerInterface;

class HomeController 
{
   private $container;

   public function __construct(ContainerInterface $container)
   {
      $this->container = $container;
   }

   public function home($request, $response, $args) {
      $data['container'] = $this->container;
      $data['response'] = $response;
      $data['title'] = 'Kanban';
      $data['css'] = 'home';
      $data['footer'] = [];

      return $this->container->renderer->render($response, 'home.php', $data);
   }
}