<?php 
 namespace app\Http\controllers;
 use app\Http\middlewares\RoleMiddleware;
 use app\Http\middlewares\AuthMiddleware;
 use app\DAOs\SprintsDAO;
 use app\repository\SprintRepository;

 use app\core\Controller;

 class SprintController extends Controller{

        private RoleMiddleware $check_role;
        private AuthMiddleware $is_auth;
        private SprintRepository $s_rpst ;
        private SprintsDAO $dao;

       public function view($v='pages.admin_sprints',$data=[]){
               $this->is_auth = new AuthMiddleware();
               $this->check_role = new RoleMiddleware($this->is_auth);

               $this->check_role->checkUser("ADMIN");

               $this->s_rpst = new SprintRepository();
                $sprints=$this->s_rpst->getSprints();
                
                $this->dao=new sprintsDAO();
                $number_sprints = $this->dao->CountSprints();

                $data=['title'=> 'User sprints' , 'sprints'=>$sprints,'number_sprints'=>$number_sprints];
                parent::view($v,$data);
       }

public function addSprint(){ 
    $this->is_auth = new AuthMiddleware();
    $this->check_role = new RoleMiddleware($this->is_auth);
    $this->check_role->checkUser("ADMIN");

    if (!isset($_FILES['photo']) || $_FILES['photo']['error'] !== 0) {
        $_SESSION['error'] = "Image obligatoire";
        header('Location: /formAddSprint');
        exit;
    }

    $imageName = time() . '_' . $_FILES['photo']['name'];
    $uploadDir = __DIR__ . '/../../../public/assets/images/sprints/';
    $uploadPath = $uploadDir . $imageName;

    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    if (!move_uploaded_file($_FILES['photo']['tmp_name'], $uploadPath)) {
        $_SESSION['error'] = "Erreur lors de l’upload de l’image";
        header('Location: /formAddSprint');
        exit;
    }

    $dateDebut = $_POST['date_debut'];
    $dateFin   = $_POST['date_fin'];
    $today     = date('Y-m-d');

      if ($dateDebut < $today) {
        $_SESSION['error'] = "La date de début ne peut pas être inférieure à la date d'aujourd'hui.";
        header('Location: /formAddSprint');
        exit;
    }

    if ($dateFin < $dateDebut) {
        $_SESSION['error'] = "La date de fin doit être supérieure à la date de début.";
        header('Location: /formAddSprint');
        exit;
    }

    $sprint = [
        'nom'        => $_POST['nom'],
        'photo'      => $imageName, 
        'date_debut' => $dateDebut,
        'date_fin'   => $dateFin
    ];

    $this->dao = new SprintsDAO();
    $this->dao->addNewSprint($sprint);

    $_SESSION['success'] = "Sprint ajouté avec succès";
    header('Location: /admin_sprints');
    exit;
}


 }

 