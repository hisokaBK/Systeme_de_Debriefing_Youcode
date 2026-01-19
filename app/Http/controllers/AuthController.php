<?php 
  namespace app\Http\controllers;
  use app\core\Controller;
  use app\core\Database;
  use app\models\Admin;


  class AuthController extends Controller{
      public function view($v='login',$data=['title' => 'Login']){
              parent::view($v,$data);
      }

      public function login(){
          $conn = Database::getInstance();
          $email    = filter_var($_POST['email'] , FILTER_VALIDATE_EMAIL);
          $password = $_POST['password'];
  
          if (!$email || empty($password)) {
              $_SESSION['error'] = "Email ou mot de passe invalide";
              header('Location: /login');
              exit();
          }
          $stmt = $conn->prepare("
              SELECT id , mot_de_passe , email
              FROM utilisateurs
              WHERE email = ?
          ");
          
          $stmt->execute([$email]);
          $user = $stmt->fetch();
  
          if ($user && (password_verify($password, $user['mot_de_passe']) || ($user['mot_de_passe'] == $password)))
          {
            $_SESSION['user']=$user['id'];
            header('Location: /');
            exit; 
          }
  
            $_SESSION['error'] ="Email ou mot de passe incorrect";
            header('Location: /login');
            exit(); 
       }
  }