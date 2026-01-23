<?php 
namespace app\DAOs;
use app\core\Database;

class CompetencesDAO{
      
    public function getCompetence($id){
              $conx=Database::getInstance();
              $prepare = $conx->prepare("SELECT * FROM competences WHERE id = ? ");
              $prepare->execute([$id]);
              $competence = $prepare->fetch();

              return $competence ;
    }

    public function getCompetences(){
              $conx=Database::getInstance();
              $prepare = $conx->prepare("SELECT * FROM competences ");
              $prepare->execute();
              $competences = $prepare->fetchAll();
              return $competences ;
    }

    public function CountCompetences(){
              $conx=Database::getInstance();
              $prepare = $conx->prepare("SELECT count(*) as num FROM competences ");
              $prepare->execute();
              $competencesNumber = $prepare->fetch();
              $num =  $competencesNumber['num'];
              return $num ;
    }

    public function addNewCompetences($competence){
            $conx=Database::getInstance();
            $prepare_competence=$conx->prepare("INSERT INTO competences (nom,code,description) VALUES (?,?,?)");

            $prepare_competence->execute($competence);
    }


     
}