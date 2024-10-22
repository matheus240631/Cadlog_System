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

      if($user &&password_verify($senha, $user['senha'] )){// verifica se a senha corresponde a um hash
          session_start();

          //Armazena na sessâo o ID de usuário e seu perfil
          $_SESSION['usuario_id'] = $user['id'];
          $_SESSION['perfil']   = $user['perfil'];

          header('Location: idex.php?action=dashbosrd');
      }else{
         echo "Email ou senha incorretos";
      } 
    }else{
      //Se a requisição não for POST (por eemplo, GET), carrega a página de registro  
       include 'views/register.php';
    } 
   }
    public function logout(){
      session_start();
      session_destroy();
      header('Location: index.php');
   }
   }  

?>