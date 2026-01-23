<?php 
namespace app\repository;
use app\models\Competences;
use app\DAOs\CompetencesDAO;
class CompetencesRepository{
      
    public function getCompetence($id){
           $competenceDAO_instns=new CompetencesDAO() ;
           $competence = $competenceDAO_instns->getCompetence($id);
           
           $competence = new Competences($competence['id'],$competence['nom'],$competence['code'],$competence['description'],$competence['created_at'],$competence['updated_at']);
    
        return $competence ;
    }

    public function getCompetences(){
          $competenceDAO_instns2=new CompetencesDAO() ;
          $Competences = $competenceDAO_instns2->getCompetences();

          $listCompetences=[];
          foreach($Competences as $competence){
                    $competencex = new Competences($competence['id'],$competence['nom'],$competence['code'],$competence['description'],$competence['created_at'],$competence['updated_at']);;
                   $listCompetences=[...$listCompetences,$competencex];
 
           }

        return $listCompetences ;
    }
}