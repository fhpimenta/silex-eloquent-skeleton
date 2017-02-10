<?php

require_once __DIR__.'/vendor/autoload.php';

use Silex\Application;
use Symfony\Component\Yaml\Yaml;
use Illuminate\Database\Capsule\Manager as Capsule;
use WhoopsSilex\WhoopsServiceProvider;

// Cria uma instância do Silex
$app = new Application();

// ativando o debug
$app['debug'] = true;

// Ativa o Whoops Service Provider para exibição de erros
if ($app['debug']) {
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    $app->register(new WhoopsServiceProvider());
}

$app['config'] = function () {
    return Yaml::parse(file_get_contents(__DIR__ . '/app/config.yml'));
};

// Configuracoes de timezone
date_default_timezone_set($app['config']['settings']['timezone']);

// Configurações do Eloquent ORM
$app['db'] = function ($app){

    $capsule = new Capsule();
    $capsule->addConnection(
        $app['config']['database']['connections'][
            $app['config']['database']['connection']
        ]
    );

    return $capsule;
};

//These two have to be outside closure
// Make the Capsule instance available globally via static methods...
$app['db']->setAsGlobal();

// Setup the Eloquent ORM...
$app['db']->bootEloquent();

$app->register(new Silex\Provider\TwigServiceProvider(), [
    'twig.path' => '../app/Views'
]);

$app->register(new Silex\Provider\ServiceControllerServiceProvider());

// Registrando o Router Service Provider
$app->register(new App\Providers\RouterServiceProvider());

// Registrando o Controller Service Provider
$app->register(new App\Providers\ControllerServiceProvider());