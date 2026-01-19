<?php 
namespace app\Http\controllers;
use app\core\Controller;
use app\repository\UsersRepository;

class HomeController extends Controller {
     
    public function view($v='home',$data=[]){
                 $inst_rpt = new UsersRepository();
                 $user =$inst_rpt->getUser($_SESSION['user']);
                 $data = ['title' => 'home','user'=>$user];
                 parent::view($v,$data);
    }
}