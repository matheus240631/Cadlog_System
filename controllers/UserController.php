<?php
//Definição da classe Usercontroller, responsável por gerenicar as ações relacionadas aos usuários 
class Usercontroller
{
    public function register(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
           $data = [
            'nome' => $_POST['nome'], 
            'email' => $_POST['email'],
            'senha' => password_hash($_POST['senha'], PASSWORD_DEFAULT), 
             'perfil'=> $_POST['perfil']
           ];

           User::create($data);
           Header('Location: index.php');
        }else{
            // Se a requisição não for POST (por exemplp,GET), carrega a página de registro
            include 'views/register.php';
        }
    }
    
     public function list(){
        $users = User::all();
        include 'views/list_users.php';
     }


}

?>