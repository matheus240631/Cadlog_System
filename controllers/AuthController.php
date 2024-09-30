<?php
// requer arquivo 'user.php' que contem o model user com as funções para manipulação de dados de usuários
require_once 'models/user.php';
class AuthController
{

   //cria função responsável pelo processo de login
   public function login()
   {
   // Verifica se a requisição HTTP é do tipo POST, ou seja, se o formulario foi enviado
      if($_SERVER['REQUEST_METHOD'] == 'POST') {
       $email = $_POST['email'];
       $senha = $_POST['senha'];

       $user = User::findByEmail($email); 
      }    
   }  
}
?>