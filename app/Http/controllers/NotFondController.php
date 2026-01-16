<?php  

namespace app\controllers;
use app\core\controller;
class NotFondController extends controller{
      public function notFondView(){
          $this->view('404', [
            'title' => '404'
        ]);
      }
   }
   

?>