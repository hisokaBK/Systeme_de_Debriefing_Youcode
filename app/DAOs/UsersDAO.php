<?php 
namespace app\DAOs;
use app\core\Database;

class UsersDAO{
      
    public function getUser($id){
              $conx=Database::getInstance();
              $prepare = $conx->prepare("SELECT * FROM utilisateurs WHERE id = ? ");
              $prepare->execute([$id]);
              $user = $prepare->fetch();

              return $user ;
    }

    public function getUsers(){
              $conx=Database::getInstance();
              $prepare = $conx->prepare("SELECT * FROM utilisateurs ");
              $prepare->execute();
              $users = $prepare->fetchAll();
              return $users ;
    }

    public function CountUsers(){
              $conx=Database::getInstance();
              $prepare = $conx->prepare("SELECT count(*) as num FROM utilisateurs ");
              $prepare->execute();
              $usersNumber = $prepare->fetch();
              $num =  $usersNumber['num'];
              return $num ;
    }

    public function addNewUser($user){
            $conx=Database::getInstance();
            
            $prepare_user=$conx->prepare("INSERT INTO utilisateurs (prenom,nom,email,photo,mot_de_passe,role) VALUES (?,?,?,?,?,?)");

            $prepare_user->execute([$user['prenom'],$user['nom'],$user['email'],$user['photo'],$user['mot_de_passe'],$user['role']]);
            
    }


     
}