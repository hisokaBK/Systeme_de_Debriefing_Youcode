<?php 
namespace app\DAOs;
use app\core\Database;

class ClasseDAO{
      
    public function getClasse($id){
              $conx=Database::getInstance();
              $prepare = $conx->prepare("SELECT * FROM classes WHERE id = ? ");
              $prepare->execute([$id]);
              $classe = $prepare->fetch();

              return $classe ;
    }

    public function getClasseByName($name){
              $conx=Database::getInstance();
              $prepare = $conx->prepare("SELECT * FROM classes WHERE nom = ? ");
              $prepare->execute([$name]);
              $classe = $prepare->fetch();

              return $classe ;
    }

    public function getClasses(){
              $conx=Database::getInstance();
              $prepare = $conx->prepare("SELECT * FROM classes ");
              $prepare->execute();
              $classes = $prepare->fetchAll();
              return $classes ;
    }

    public function CountClasses(){
              $conx=Database::getInstance();
              $prepare = $conx->prepare("SELECT count(*) as num FROM classes ");
              $prepare->execute();
              $classesNumber = $prepare->fetch();
              $num = $classesNumber['num'];
              return $num ;
    }

    public function addNewClasses($classes){
            $conx=Database::getInstance();
            $prepare_classes=$conx->prepare("INSERT INTO classes (nom,photo) VALUES (?,?)");

            $prepare_classes->execute($classes);
    }

     
}