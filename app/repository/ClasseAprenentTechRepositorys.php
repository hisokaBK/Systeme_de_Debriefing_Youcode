<?php 
namespace app\repository;
use app\models\ClasseAprenentTech;
use app\DAOs\ClasseAprenentTechDAO;
class ClasseAprenentTechRepositorys{
      
    public function getClasseAprenent($id){
           $classeDAO_instns=new ClasseAprenentTechDAO() ;
           $classe = $classeDAO_instns->getClasseAprenentTech($id);
           
           $classe = new ClasseAprenentTech($classe['id'],$classe['teacher_id'],$classe['apprenant_id'],$classe['classeAprenentTech_id'],$classe['created_at'],$classe['updated_at']);
    
        return $classe ;
    }

    public function getClasseAprenents(){
          $classeDAO_instns2=new ClasseAprenentTechDAO() ;
          $classes = $classeDAO_instns2->getClasseAprenentTechs();

          $listClasses=[];
          foreach($classes as $classe){
                    $classex = new ClasseAprenentTech($classe['id'],$classe['teacher_id'],$classe['apprenant_id'],$classe['classeAprenentTech_id'],$classe['created_at'],$classe['updated_at']);
                   $listClasses=[...$listClasses,$classex];
 
           }

        return $listClasses ;
    }
}