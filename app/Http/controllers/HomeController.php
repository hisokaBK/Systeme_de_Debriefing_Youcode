<?php 
namespace app\Http\controllers;
use app\core\controller;
use  app\services\ViewService;

class HomeController extends controller{
    public function index(){

        ViewService::instBlade();
        ViewService::render('home', [
            'title' => 'Welcome to blog home'
        ]);
    }
}