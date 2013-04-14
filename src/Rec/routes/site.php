<?php

$app->get('/', function () use ($app) {
    $app->render('index.php');
});

$app->get('/relify', function () use ($app) {
    $app->render('relify_test.php');
});

$app->post('/relify', function () use ($app) {

});