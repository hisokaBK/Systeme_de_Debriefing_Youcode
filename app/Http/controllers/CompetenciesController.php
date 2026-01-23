<?php 
 namespace app\Http\controllers;
 use app\Http\middlewares\RoleMiddleware;
 use app\Http\middlewares\AuthMiddleware;
 use app\repository\CompetencesRepository;
 use app\DAOs\CompetencesDAO;

 use app\core\Controller;

 class CompetenciesController extends Controller{

        private RoleMiddleware $check_role;
        private AuthMiddleware $is_auth;
        private CompetencesRepository $rpsty;
        private CompetencesDAO $dao;

       public function view($v='pages.admin_competencies',$data=[]){
               $this->is_auth = new AuthMiddleware();
               $this->check_role = new RoleMiddleware($this->is_auth);

               $this->check_role->checkUser("ADMIN");

               $this->rpsty = new CompetencesRepository();
               $competences = $this->rpsty->getCompetences();

               $this->dao = new CompetencesDAO();
               $num_competences=$this->dao->CountCompetences();

               $data = ["title"=>'competencies','competences'=>$competences , 'num_competences'=>$num_competences];

               parent::view($v,$data);
        }

        public function addCompetencies(){ 
                 $this->is_auth = new AuthMiddleware();
                 $this->check_role = new RoleMiddleware($this->is_auth);
                 $this->check_role->checkUser("ADMIN");
             
             
                 $competence = [
                     $_POST['nom'],
                     $_POST['code'], 
                     $_POST['description'],
                 ];
             
                 $this->dao = new CompetencesDAO();
                 $this->dao->addNewCompetences($competence);
             
                 header('Location: /admin_competencies');
                 exit;
       }
 }