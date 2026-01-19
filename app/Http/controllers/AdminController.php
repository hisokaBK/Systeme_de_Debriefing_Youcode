<?php 
 namespace app\Http\controllers;
 use app\Http\middlewares\RoleMiddleware;
 use app\Http\middlewares\AuthMiddleware;

 use app\core\Controller;

 class AdminController extends Controller{

        private RoleMiddleware $check_role;
        private AuthMiddleware $is_authl;

       public function view($v='dashboard_admin',$data=[]){
               $this->is_authl = new AuthMiddleware();
               $this->check_role = new RoleMiddleware($this->is_authl);

               $this->check_role->checkUser("ADMIN");
               parent::view($v,$data);
       }
 }