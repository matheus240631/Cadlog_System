<?php

class Database{
    //Utilizar padrão Singleton, cujo objtivo é farantir que apenas uma única instância de classe seja criada durante a execução do programa, e que essa instância seja utilizada sempre que necessário 
   private static $instance = null;

    //Método público que retorna a conexão BD
   public static function getConnection(){
     //verifica se a instância de conxão ainda 
    if(!self::$instance){
     $host   = 'localhost';
     $db     = 'sistema_usuarios';
     $user   = 'rot';
     $password = '';

    
     // A conexâo usa o driver Mysql (mysql:) e as infotmaçôes de host e DB
     self::$instance = new PDO("mysql:host=$host;dbname=$db", $user, $password);
        //define o modo de erro para exceçôes, facilitando a depuração e tratamento do erro
       self::$instance->setAttribute(PDO::ATTR_AUTOCOMMIT, PDO::ERRMODE_EXCEPTION);
         
    }
      return self::$instance;
   }
}
?>