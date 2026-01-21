<?php 
namespace app\repository;
use app\models\Admin;
use app\models\Teacher;
use app\models\Apprenant;
use app\DAOs\UsersDAO;
class UsersRepository{
      
    public function getUser($id){
           
          $userDAO_instns=new UsersDAO() ;
          $user = $userDAO_instns->getUser($id);
         
           switch($user['role']){
                case 'ADMIN':
                   $user = new Admin($user['id'],$user['prenom'],$user['nom'],$user['email'],$user['photo'],$user['role'],$user['mot_de_passe'],$user['actif'],$user['created_at'],$user['updated_at']);
                   break ;

                case 'TEACHER':
                    $user = new Teacher($user['id'],$user['prenom'],$user['nom'],$user['email'],$user['photo'],$user['role'],$user['mot_de_passe'],$user['actif'],$user['created_at'],$user['updated_at']);
                    break ;

                default :
                    $user = new Apprenant($user['id'],$user['prenom'],$user['nom'],$user['email'],$user['photo'],$user['role'],$user['mot_de_passe'],$user['actif'],$user['created_at'],$user['updated_at']);
        }
    
        return $user ;
}


    public function getUsers(){
          $userDAO_instns2=new UsersDAO() ;
          $users = $userDAO_instns2->getUsers();

         $listUsers=[];
         foreach($users as $user){
             switch($user['role']){
                case 'ADMIN':
                   $userx = new Admin($user['id'],$user['prenom'],$user['nom'],$user['email'],$user['photo'],$user['role'],$user['mot_de_passe'],$user['actif'],$user['created_at'],$user['updated_at']);
                  $listUsers=[...$listUsers,$userx];

                   break ;

                case 'TEACHER':
                    $userx = new Teacher($user['id'],$user['prenom'],$user['nom'],$user['email'],$user['photo'],$user['role'],$user['mot_de_passe'],$user['actif'],$user['created_at'],$user['updated_at']);
                    $listUsers=[...$listUsers,$userx];
                    break ;

                default :
                    $userx = new Apprenant($user['id'],$user['prenom'],$user['nom'],$user['email'],$user['photo'],$user['role'],$user['mot_de_passe'],$user['actif'],$user['created_at'],$user['updated_at']);
                   $listUsers=[...$listUsers,$userx];

             }

   }
        return $listUsers ;
 }
}