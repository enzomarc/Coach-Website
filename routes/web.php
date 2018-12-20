<?php

use App\Poison;

require_once '../app/helpers.php';

$poison = new Poison(dirname(__DIR__) . '/resources/views');

Poison::setViewExtension('.poison.php');

$poison->addGlobal('router', $router);

$router->get('/', function () use($poison) {
    $poison->render('services');
})->name('home');

$router->get('/services', function () use($poison) {
    $poison->render('services');
})->name('services');

$router->get('/products', function () use($poison) {
    $poison->render('products');
})->name('products');

$router->get('/contact', function () use($poison) {
    $poison->render('contact');
})->name('contact');

$router->post('/contact', function () {
    var_dump(input());
});