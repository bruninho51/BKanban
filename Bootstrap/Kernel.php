<?php

namespace Bootstrap;

use Slim\Views\PhpRenderer;
use Services\Application\Controller;
use \FileSystemIterator;

final class Kernel {

    private static $app;

    public static function app()
    {
        if (!self::$app) {
            self::$app = new \Slim\App([
                'settings' => [
                    'displayErrorDetails' => true,
                    'blade' => [
                        'blade_template_path' => __DIR__ . "/../Services/Application/View/",
                        'blade_cache_path' => __DIR__ . "/../Services/Infraestructure/Storage/Cache/"
                    ]
                ],
            ]);
        }
        self::addRendererOnContainer(self::$app);
        self::addControllersOnContainer(self::$app);

        return self::$app;
    }

    private static function addRendererOnContainer(&$app)
    {
        $container = $app->getContainer();

        //Registrando Blade no CI do Slim
        $container['view'] = function ($container) {
            return new \Slim\Views\Blade(
                $container['settings']['blade']['blade_template_path'],
                $container['settings']['blade']['blade_cache_path']
            );
        };
    }

    private static function addControllersOnContainer(&$app)
    {
        $container = $app->getContainer();

        //Percorrendo controladores e colocando-os no CI do Slim
        foreach (new FileSystemIterator(__DIR__ . '/../Services/Application/Controller') as $controller) {
            $container[$controller->getBaseName('.php')] = function ($container) use ($controller){
                $namespace = "\\Services\\Application\\Controller\\" . (string) $controller->getBaseName('.php');
                $ctl = new $namespace($container);

                return $ctl;
            };
        }
    }
}