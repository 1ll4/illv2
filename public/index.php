<?php

require_once '../vendor/autoload.php';
use App\Core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/news', 'NewsController@index');
$router->get('/page', 'PageController@index');

$router->dispatch();