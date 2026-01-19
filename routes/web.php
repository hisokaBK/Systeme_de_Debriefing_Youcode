<?php 
require_once __DIR__ . '/../vendor/autoload.php';

use app\core\Router;
session_start();

$router = new Router();
$router->get('/', "HomeController@view");
$router->get('/404', "NotFondController@view");

$router->get('/login', "AuthController@view");
$router->post('/login_check', "AuthController@login");

$router->get('/dashboard_admin', "AdminController@view");

$router->dispatch();

if(isset($_SESSION['error']))unset($_SESSION['error']);
