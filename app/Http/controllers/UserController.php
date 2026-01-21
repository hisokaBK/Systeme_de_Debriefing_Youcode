<?php 
 namespace app\Http\controllers;
 use app\Http\middlewares\RoleMiddleware;
 use app\Http\middlewares\AuthMiddleware;
 use app\repository\UsersRepository;

 use app\DAOs\UsersDAO;
 use app\core\Controller;

class UserController extends Controller{
       private RoleMiddleware $check_role;
       private AuthMiddleware $is_auth;
       private UsersDAO $dao;
       private UsersRepository $u_rpst;


       public function view($v='pages.admin_users',$data=[]){
                $this->is_auth = new AuthMiddleware();
                $this->check_role = new RoleMiddleware($this->is_auth);
                $this->check_role->checkUser("ADMIN");

                $this->u_rpst = new UsersRepository();
                $users=$this->u_rpst->getUsers();
                
                $this->dao=new UsersDAO();
                $number_users = $this->dao->CountUsers();
                $data=['title'=> 'User Management' , 'users'=>$users,'number_users'=>$number_users];
                parent::view($v,$data);
       }

       public function addUser(){
               $this->is_auth = new AuthMiddleware();
               $this->check_role = new RoleMiddleware($this->is_auth);
               $this->check_role->checkUser("ADMIN");

               $user =[
                        'prenom'=> $_POST['prenom'],
                        'nom'   => $_POST['nom'],
                        'email' => $_POST['email'],
                        'photo' => $_POST['photo'],
                        'mot_de_passe'  => $_POST['mot_de_passe'],
                        'role'  => $_POST['role']
                        ];

                $this->dao=new UsersDAO() ;
                $this->dao->addNewUser($user);

                header('Location: /');
                exit;
       }


}