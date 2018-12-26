<?php

use App\Poison;
use App\Router\Router;

$router = $GLOBALS['router'];

require_once dirname(__DIR__) . '/app/helpers.php';

$router->get('/', 'PagesController@index')->name('home');

$router->get('/services', 'PagesController@services')->name('services');

$router->get('/products', 'PagesController@products')->name('products');

$router->get('/contact', 'PagesController@contact')->name('contact');

$router->get('/reservation', 'PagesController@reservationStudent')->name('reservation.student');

$router->post('/reservation', 'PagesController@sendReservation')->name('reservation.send');

$router->post('/newsletter', 'NewsletterController@addMail')->name('newsletter.add');

$router->post('/contact', 'NewsletterController@addMessage')->name('message.add');

/* Blog */

$router->get('/blog', 'PagesController@blog')->name('blog');

/* Writer */

$router->get('/dashboard', 'PagesController@author')->name('author');
$router->post('/dashboard', 'PagesController@authorLogin')->name('author.login');

$router->resource('post', 'PostsController');

/* $router->get('/hash/:password', function ($password) {
    echo sha1($password);
}); */
