<?php

require_once __DIR__ . '/../app/bootstrap.php';



$app->get('/', function () use ($app) {
    return $app['twig']->render('Dashboard/index.html.twig');
});


$app->run();