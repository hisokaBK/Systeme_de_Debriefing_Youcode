<?php 
namespace app\repository;
use app\models\Classes;
use app\DAOs\ClasseDAO;
class ClassesRepository{
      
    public function getClasse($id){
           $classeDAO_instns=new ClasseDAO() ;
           $classe = $classeDAO_instns->getClasse($id);
           
           $classe = new Classes($classe['id'],$classe['nom'],$classe['photo'],$classe['created_at'],$classe['updated_at']);
    
        return $classe ;
    }

    public function getClasseByName($name){
           $classeDAO_instns=new ClasseDAO() ;
           $classe = $classeDAO_instns->getClasseByName($name);
           
           $classe = new Classes($classe['id'],$classe['nom'],$classe['photo'],$classe['created_at'],$classe['updated_at']);
    
        return $classe ;
    }

    public function getClasses(){
          $classeDAO_instns2=new ClasseDAO() ;
          $classes = $classeDAO_instns2->getClasses();

          $listClasses=[];
          foreach($classes as $classe){
                    $classex = new Classes($classe['id'],$classe['nom'],$classe['photo'],$classe['created_at'],$classe['updated_at']);
                   $listClasses=[...$listClasses,$classex];
 
           }

        return $listClasses ;
    }
}