<?php

require '../app/helpers.php';

use Pecee\SimpleRouter\SimpleRouter as Route;
use App\Renderer;
Route::get('/', function () {
	Renderer::render('services');
});
