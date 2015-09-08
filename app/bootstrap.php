<?php

require_once __DIR__ . '/../vendor/autoload.php';

$app = new \Silex\Application();

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => array(
        __DIR__ . '/Resources/views',
        __DIR__ . '/../src/View'
        ),
));

