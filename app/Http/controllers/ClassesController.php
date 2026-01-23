<?php 
 namespace app\Http\controllers;
 use app\Http\middlewares\RoleMiddleware;
 use app\Http\middlewares\AuthMiddleware;
 use app\DAOs\ClasseDAO;
 use app\DAOs\ClasseAprenentTechDAO;
 use app\repository\ClassesRepository;

 use app\core\Controller;

 class ClassesController extends Controller{

        private RoleMiddleware $check_role;
        private AuthMiddleware $is_auth;

        private ClasseDAO $daoClasseDAO;
        private ClasseAprenentTechDAO $daoClasseAprenentTechDAO;

       public function view($v='pages.admin_classes',$data=[]){
               $this->is_auth = new AuthMiddleware();
               $this->check_role = new RoleMiddleware($this->is_auth);

               $this->check_role->checkUser("ADMIN");

               $this->daoClasseAprenentTechDAO = new ClasseAprenentTechDAO();
               $classes = $this->daoClasseAprenentTechDAO->getclasseView();
               $number_user_class =[];
               foreach($classes as $class){
                      $count = $this->daoClasseAprenentTechDAO->getClasseByName($class['id']);
                      $number_user_class=[...$number_user_class,$count];
               }
               $data=[
                 'title'=>'Classes',
                 'classes'=>$classes,
                 'number_user_class'=>$number_user_class
               ];

               parent::view($v,$data);
       }

       public function newClasse(){
                $this->is_auth = new AuthMiddleware();
                $this->check_role = new RoleMiddleware($this->is_auth);
 
                $this->check_role->checkUser("ADMIN");

                if (!isset($_FILES['photo']) || $_FILES['photo']['error'] !== 0) {
                        $_SESSION['error'] = "Image obligatoire";
                        header('Location: /formAddUser');
                        exit;
                    }
                
                    $imageName = time() . '_' . $_FILES['photo']['name'];
                    $uploadDir = __DIR__ . '/../../../public/assets/images/classess/';
                    $uploadPath = $uploadDir . $imageName;
                
                    if (!is_dir($uploadDir)) {
                        mkdir($uploadDir, 0777, true);
                    }
                
                    if (!move_uploaded_file($_FILES['photo']['tmp_name'], $uploadPath)) {
                        $_SESSION['error'] = "Erreur lors de l’upload de l’image";
                        header('Location: /formAddUser');
                        exit;
                    }
             
                  $this->daoClasseDAO = new ClasseDAO();
                  $this->daoClasseDAO->addNewClasses([$_POST['classe_name'],$imageName]);
                 
                  $teacher = $_POST['teacher_id'];
                  $classe_name = $_POST['classe_name'];
                  $apprenants = $_POST['apprenant_id'];

                  $ClassesRepository = new ClassesRepository();
                  $classeX = $ClassesRepository->getClasseByName($classe_name);
                  $classe_id = $classeX->id;

                  $this->daoClasseAprenentTechDAO = new ClasseAprenentTechDAO();
                  for($i=0;$i<count($apprenants);$i++){
                     $this->daoClasseAprenentTechDAO->addNewClasseAprenentTech([$teacher,$apprenants[$i],$classe_id]);
                  }
                 
                  header('Location: /admin_classes');
                  exit;
       }
 }