<?php 
namespace app\repository;
use app\models\Sptint;
use app\DAOs\SprintsDAO;
class SprintRepository{
      
    public function getsprint($id){
           $sprintDAO_instns=new SprintsDAO() ;
           $sprint = $sprintDAO_instns->getSprint($id);
           
           $sprint = new Sptint($sprint['id'],$sprint['nom'],$sprint['photo'],$sprint['date_debut'],$sprint['date_fin'],$sprint['created_at'],$sprint['updated_at']);
    
        return $sprint ;
    }

    public function getSprints(){
          $sprintDAO_instns2=new SprintsDAO() ;
          $sprints = $sprintDAO_instns2->getSprints();

          $listSprints=[];
          foreach($sprints as $sprint){
                    $sprintx = new Sptint($sprint['id'],$sprint['nom'],$sprint['photo'],$sprint['date_debut'],$sprint['date_fin'],$sprint['created_at'],$sprint['updated_at']);
                   $listSprints=[...$listSprints,$sprintx];
 
           }

        return $listSprints ;
    }
}