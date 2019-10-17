<?php

   Class Db {
      private static $instancia ;
      
      public static function ConexaoDb() {
         
         if(!isset(self::$instancia)):
            self::$instancia = new \PDO('mysql:host=localhost;dbname=trabalhoProjeto;charset=utf8', 'root', '');
         endif;
            return self::$instancia;
         
      }
   }
  

?>