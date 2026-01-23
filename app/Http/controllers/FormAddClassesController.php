<?php 
 namespace app\Http\controllers;
 use app\Http\middlewares\RoleMiddleware;
 use app\Http\middlewares\AuthMiddleware;
 use app\repository\UsersRepository;

 use app\core\Controller;

 class FormAddClassesController extends Controller{

        private RoleMiddleware $check_role;
        private AuthMiddleware $is_auth;
        private UsersRepository $UsersRsry;

       public function view($v='partials.formAddClass',$data=["title"=>'form add Classe']){
               $this->is_auth = new AuthMiddleware();
               $this->check_role = new RoleMiddleware($this->is_auth);
               $this->UsersRsry = new UsersRepository();
               $this->check_role->checkUser("ADMIN");

               $apprenants = $this->UsersRsry->getUsersByRole('APPRENANT');
               $teachers =$this->UsersRsry->getUsersByRole('TEACHER');


               $data=["title"=>'form add Classe','teachers'=>$teachers,'apprenants'=>$apprenants];
               parent::view($v,$data);
       }
 }