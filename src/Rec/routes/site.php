<?php

$app->get('/settings', 'authenticate', function () use ($app) {
    $user = \LD\Model\User::withSession();

    $app->render('settings.php', array('user_full_name' => $user->getFullName()));
});


$app->get('/help', 'authenticate', function () use ($app) {
    $user = \LD\Model\User::withSession();

    $app->render('index.php', array('user_full_name' => $user->getFullName()));
});