<?php

session_start();

require '../vendor/autoload.php';

$app = new \Slim\Slim(array(
    'templates.path' => realpath(dirname(__FILE__) . '/../src/Rec') . '/templates',
    'mode' => 'development',
    'log.enable' => true,
    'debug' => false
));

// Only invoked if mode is "development"
$app->configureMode('development', function () use ($app) {
    $app->config(array(
        'log.enable' => false,
        'debug' => true
    ));
});

$loader = new \Symfony\Component\ClassLoader\UniversalClassLoader();
$loader->registerNamespaces(array(
    'Rec' => realpath(dirname(__FILE__) . '/../src/')
));
$loader->register();

// simple authentication
function authenticate()
{
    $app = \Slim\Slim::getInstance();
    $user = \LD\Model\User::withSession();

    if ($user == false) {
        $app->redirect('/login');
        return false;
    }

    return true;
}

require realpath(dirname(__FILE__) . '/../src/Rec') . '/routes/lesson.php';
require realpath(dirname(__FILE__) . '/../src/Rec') . '/routes/auth.php';
require realpath(dirname(__FILE__) . '/../src/Rec') . '/routes/site.php';

$app->run();