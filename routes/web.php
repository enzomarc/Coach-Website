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

$router->get('/blog', 'PagesController@blog')->name('blog.index');
$router->get('/blog', 'PagesController@blog_older')->name('blog.index.older');
$router->get('/blog/post/:post', 'PostsController@show')->name('blog.show');

/* Writer */

$router->get('/dashboard', 'PagesController@author')->name('author');
$router->get('/new-post', 'PagesController@write')->name('author.write');
$router->post('/dashboard', 'PagesController@authorLogin')->name('author.login');
$router->get('/dashboard/logout', 'PagesController@authorLogout')->name('author.logout');

$router->resource('posts', 'PostsController');
$router->get('posts/:post/publish', 'PostsController@publish')->name('posts.publish');