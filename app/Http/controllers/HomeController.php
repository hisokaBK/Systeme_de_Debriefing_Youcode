<?php 
namespace app\Http\controllers;
use app\core\Controller;
use app\repository\UsersRepository;

class HomeController extends Controller {
     
    public function view($v='pages.home',$data=['title' => 'home']){
                 if(isset($_SESSION['user'])){
                       $inst_rpt = new UsersRepository();
                       $user =$inst_rpt->getUser($_SESSION['user']['id']);
                       $data = ['title' => 'home','user'=>$user];
                  }
                 
                 parent::view($v,$data);
    }
}