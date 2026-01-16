<?php 
  namespace app\services ;
  use eftec\bladeone\BladeOne ;

  class ViewService{

        private static BladeOne $blade ;

        public static function instBlade() : void{
             $conf= require __DIR__ .'/../../config/blade.php';

             self::$blade=new BladeOne($conf['view'],$conf['cache'],BladeOne::MODE_AUTO);
         }

         public static function render(string $view , array $data=[] ) : void {
                echo self::$blade->run($view , $data);
         }
  }