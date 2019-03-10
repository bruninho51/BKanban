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
                    'displayErrorDetails' => true
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
        $container['renderer'] = new PhpRenderer(__DIR__ . "/../Services/Application/View/");
    }

    private static function addControllersOnContainer(&$app)
    {
        $container = $app->getContainer();

        foreach (new FileSystemIterator(__DIR__ . '/../Services/Application/Controller') as $controller) {
            $container[$controller->getBaseName('.php')] = function ($container) use ($controller){
                $namespace = "\\Services\\Application\\Controller\\" . (string) $controller->getBaseName('.php');
                $c = new $namespace($container);

                return $c;
            };
        }
    }
}