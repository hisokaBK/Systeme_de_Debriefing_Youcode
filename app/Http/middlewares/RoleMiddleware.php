<?php 

  namespace app\Http\middlewares;
  use app\Http\middlewares\AuthMiddleware;

  class RoleMiddleware {
       private AuthMiddleware $auth ;

       public function __construct(AuthMiddleware $auth){
                 $this->auth = $auth;
       }

       public function checkUser(string $role){
                  if(!$this->auth->auth()){
                        header("Location: /login");
                        exit;
                  }

                  if(!$_SESSION['user']['role'] == $role){
                        $_SESSION['error_role'] = "Access denied! You don't have permission.";
                        header("Location: /");
                        exit;
                   }
       }

      




  }