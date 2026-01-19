<?php 

namespace app\Http\middlewares;

class ActifMiddleware{

       public static function isActif($actif){
             if(!$actif){
                  header('Location: /404');
                  $_SESSION['blocked'] = "Vous n’avez plus l’autorisation d’accéder à nos services";
                  exit();  
             }
       }
             
}

     