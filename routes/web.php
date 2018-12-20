<?php

use App\Poison;

$poison = new Poison(dirname(__DIR__) . '/resources/views');

$poison->addGlobal('router', $router);

$router->get('/', function () use($poison) {
    $poison->render('services');
});

$router->get('/contact', function () use($poison) {
    $poison->render('contact');
})->name('contact');