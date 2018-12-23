<?php

use App\Poison;
use App\Router\Router;

$router = $GLOBALS['router'];

require_once dirname(__DIR__) . '/app/helpers.php';

$router->get('/', 'PagesController@index')->name('home');

$router->get('/services', 'PagesController@services')->name('services');

$router->get('/products', 'PagesController@products')->name('products');

$router->get('/contact', 'PagesController@contact')->name('contact');

$router->post('/newsletter', 'NewsletterController@addMail')->name('newsletter.add');
