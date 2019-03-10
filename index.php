<?php
require_once('vendor/autoload.php');

ini_set("display_errors", 1);
ini_set("track_errors", 1);
ini_set("html_errors", 1);
error_reporting(E_ALL);

$app = \Bootstrap\Kernel::app();

include_once(__DIR__ . '/Services/Application/Routes/routes.php');

$app->run();

