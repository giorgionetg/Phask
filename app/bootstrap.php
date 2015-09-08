<?php

require_once __DIR__ . '/../vendor/autoload.php';

$app = new \Silex\Application();

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => array(
        __DIR__ . '/Resources/views',
        __DIR__ . '/../src/View'
        ),
));

require __DIR__ . '/phask_db_config.php';

require __DIR__ . '/install.php';

$app['phask.job'] = $app->share(function() use ($app) {
    return new \Giorgionetg\Phask\Provider\JobProvider($app['db']);
});

$app['phask.task'] = $app->share(function() use ($app) {
    return new \Giorgionetg\Phask\Provider\TaskProvider($app['db']);
});