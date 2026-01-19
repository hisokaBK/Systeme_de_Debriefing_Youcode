<?php 
namespace app\DAOs;
use app\core\Database;

class UsersDAO{
      
    public function getUser($id){
              $conx=Database::getInstance();
              $prepare = $conx->prepare("SELECT * FROM utilisateurs WHERE id = ? ");
              $prepare->execute([$id]);
              $result = $prepare->fetch();

              return $result ;
    }

     
}