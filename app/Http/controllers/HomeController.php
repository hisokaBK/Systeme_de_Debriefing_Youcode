<?php 
namespace app\Http\controllers;
use app\core\Controller;

class HomeController extends Controller {
   
    public function view($v='home',$data=['title' => 'home']){
             parent::view($v,$data);
    }
}