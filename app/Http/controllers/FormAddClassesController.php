<?php 
 namespace app\Http\controllers;
 use app\Http\middlewares\RoleMiddleware;
 use app\Http\middlewares\AuthMiddleware;

 use app\core\Controller;

 class FormAddClassesController extends Controller{

        private RoleMiddleware $check_role;
        private AuthMiddleware $is_auth;

       public function view($v='partials.formAddClass',$data=["title"=>'form add Classe']){
               $this->is_auth = new AuthMiddleware();
               $this->check_role = new RoleMiddleware($this->is_auth);

               $this->check_role->checkUser("ADMIN");
               parent::view($v,$data);
       }
 }