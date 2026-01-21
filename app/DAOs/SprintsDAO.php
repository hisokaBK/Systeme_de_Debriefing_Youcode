<?php 
namespace app\DAOs;
use app\core\Database;

class SprintsDAO{
      
    public function getSprint($id){
              $conx=Database::getInstance();
              $prepare = $conx->prepare("SELECT * FROM sprint WHERE id = ? ");
              $prepare->execute([$id]);
              $sprint = $prepare->fetch();

              return $sprint ;
    }

    public function getSprints(){
              $conx=Database::getInstance();
              $prepare = $conx->prepare("SELECT * FROM sprint ");
              $prepare->execute();
              $sprints = $prepare->fetchAll();
              return $sprints ;
    }

    public function CountSprints(){
              $conx=Database::getInstance();
              $prepare = $conx->prepare("SELECT count(*) as num FROM sprint ");
              $prepare->execute();
              $sprintsNumber = $prepare->fetch();
              $num =  $sprintsNumber['num'];
              return $num ;
    }

    public function addNewSprint($sprint){
            $conx=Database::getInstance();
            $prepare_sprint=$conx->prepare("INSERT INTO sprint (nom,photo,date_debut,date_fin) VALUES (?,?,?,?)");

            $prepare_sprint->execute([$sprint['nom'],$sprint['photo'],$sprint['date_debut'],$sprint['date_fin']]);
            
    }


     
}