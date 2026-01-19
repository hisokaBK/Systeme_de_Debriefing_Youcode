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
              SELECT id, prenom,nom,email,photo,mot_de_passe,role,actif,created_at,updated_at
              FROM utilisateurs
              WHERE email = ?
          ");
          $stmt->execute([$email]);
  
          $user = $stmt->fetch();
  
          if ($user && (password_verify($password, $user['mot_de_passe']) || ($user['mot_de_passe'] == $password)))
          {
              if(!$user['actif']){
                  header('Location: /404');
                  $_SESSION['error'] = "Vous n’avez plus l’autorisation d’accéder à nos services";
                  exit();  
              }
  
              $_SESSION['flash_welcome'] = "Welcome <b>" . $user['prenom'] . "</b>";
               
              if($user['role']=='APPRENANT'){
                  $_SESSION['user'] = new Apprenant($user['id'],$user['prenom'],$user['nom'],$user['email'],$user['photo'],$user['role'],$user['mot_de_passe'],$user['actif'],$user['created_at'],$user['updated_at']);
  
                  header('Location: /');
                  exit();
        
              }elseif($user['role']=='TEACHER'){
                   $_SESSION['user'] = new Teacher($user['id'],$user['prenom'],$user['nom'],$user['email'],$user['photo'],$user['role'],$user['mot_de_passe'],$user['actif'],$user['created_at'],$user['updated_at']);
                  header('Location: /bord_teacher');
                  exit();
  
              }else{   
                   
                 $_SESSION['user'] = new Admin($user['id'],$user['prenom'],$user['nom'],$user['email'],$user['photo'],$user['role'],$user['mot_de_passe'],$user['actif'],$user['created_at'],$user['updated_at']);
  
                  header('Location: /'); //bord_admin
                  exit();              
                  
              }
              
          }
  
          $_SESSION['error'] ="Email ou mot de passe incorrect";
          header('Location: /login');
          exit(); 
       }
  }