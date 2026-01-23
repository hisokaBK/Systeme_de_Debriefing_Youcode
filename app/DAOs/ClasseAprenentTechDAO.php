<?php 
namespace app\DAOs;
use app\core\Database;

class ClasseAprenentTechDAO{
      
    public function getClasseAprenentTech($id){
              $conx=Database::getInstance();
              $prepare = $conx->prepare("SELECT * FROM classeAprenentTech WHERE id = ? ");
              $prepare->execute([$id]);
              $classe = $prepare->fetch();

              return $classe ;
    }

    public function getClasseAprenentTechs(){
              $conx=Database::getInstance();
              $prepare = $conx->prepare("SELECT * FROM classeAprenentTech ");
              $prepare->execute();
              $classes = $prepare->fetchAll();
              return $classes ;
    }

    public function CountClasseAprenentTechs(){
              $conx=Database::getInstance();
              $prepare = $conx->prepare("SELECT count(*) as num FROM classeAprenentTech ");
              $prepare->execute();
              $classesNumber = $prepare->fetch();
              $num = $classesNumber['num'];
              return $num ;
    }

    public function addNewClasseAprenentTech($classes){
            $conx=Database::getInstance();
            $prepare_classes=$conx->prepare("INSERT INTO classeAprenentTech (teacher_id,apprenant_id,classe_id) VALUES (?,?,?)");

            $prepare_classes->execute($classes);
    }

    public function getclasseView(){
            $conx=Database::getInstance();
            $prepare_classes=$conx->prepare("
                     SELECT c.id , c.nom as class ,c.photo ,u.prenom, u.nom  
                     from classes c
                     join classeAprenentTech cat on c.id = cat.classe_id
	                 join utilisateurs u on u.id = cat.teacher_id 
                     group by c.id , c.nom,c.photo,u.prenom, u.nom ;
              ");

             $prepare_classes->execute();
             $data = $prepare_classes->fetchAll();
             return $data;
     }

     public function getClasseByName($classe_id){
              $conx=Database::getInstance();
              $prepare = $conx->prepare("SELECT count(*) from classeAprenentTech where classe_id = ? ");
              $prepare->execute([$classe_id]);
              $classe = $prepare->fetch();

              return $classe ;
      }


     
}