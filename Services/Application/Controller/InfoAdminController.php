<?php

namespace Services\Application\Controller;
use Services\Application\Config\Configuration;

class InfoAdminController
{
   public function infoDatabase($request, $response, $args) {
        echo 'DB ARQ: ' . Configuration::get('database', 'databaseArq') . '<br>' . PHP_EOL;
        
        return $response;
   }
}