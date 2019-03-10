<?php

namespace Services\Application\Config;

use \SplFileObject;

class Configuration {

    public static function get($file, $config)
    {
        $configurations = parse_ini_file(__DIR__ . "/{$file}.ini");

        if (isset($configurations[$config])) {
            return $configurations[$config];
        } else {
            throw new \Exception('A configuração ' . $config . 
            ' não existem no arquivo ' . $file . '.ini');
        }
    }
}