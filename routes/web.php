<?php

require_once __DIR__ . '/../app/helpers.php';

use Pecee\SimpleRouter\SimpleRouter as Route;
use App\Renderer;

Route::get('/', function () {
	Renderer::render('services');
})->name('home');

Route::get('contact', function () {
    echo "Contact page";
});