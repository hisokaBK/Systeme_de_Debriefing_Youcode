<?php 
require_once __DIR__ . '/../vendor/autoload.php';

use app\core\Router;

session_start();

$router = new Router();
$router->get('/', "HomeController@index");
$router->get('/404', "NotFondController@notFondView");

$router->dispatch();
if(isset($_SESSION['error']))unset($_SESSION['error']);