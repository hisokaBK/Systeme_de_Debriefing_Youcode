<?php  

namespace app\Http\controllers;
use app\core\controller;
class NotFondController extends controller{
      public function view($v='404',$data=['title' => '404']){
           parent::view($v,$data);
      }
   }
   

?>