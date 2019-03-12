<?php

namespace Services\Application\Controller;

class Controller {

    public $container;

    public function __construct(\Slim\Container $container)
    {
        $this->container = $container;
    }

    public function __get($prop)
    {
        if (isset($this->container[$prop])) {
            return $this->container->$prop;
        }
    }
}