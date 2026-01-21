<?php 
require_once __DIR__ . '/../vendor/autoload.php';

use app\core\Router;
session_start();

$router = new Router();
$router->get('/', "HomeController@view");
$router->get('/404', "NotFondController@view");

$router->get('/login', "AuthController@view");
$router->post('/login_check', "AuthController@login");

$router->get('/logout', "AuthController@logout");

$router->get('/dashboard_admin', "AdminController@view");

$router->get('/admin_users', "UserController@view");
$router->get('/formAddUser', "FormAddUserController@view");
$router->post('/addUser', "UserController@addUser");

$router->get('/formAddSprint', "FormAddSprintController@view");
$router->get('/admin_sprints', "SprintController@view");
$router->post('/addSprint', "SprintController@addSprint");

$router->get('/admin_classes', "ClassesController@view");
$router->get('/formAddClass', "FormAddClassesController@view");

$router->get('/admin_competencies', "CompetenciesController@view");
$router->get('/formAddCompetencies', "FormAddCompetenciesController@view");

$router->dispatch();

if(isset($_SESSION['error']))unset($_SESSION['error']);
if(isset($_SESSION['error_role']))unset($_SESSION['error_role']);
