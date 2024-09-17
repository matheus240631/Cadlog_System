<?php
//Definição da classe Usercontroller, responsável por gerenicar as ações relacionadas aos usuários 
class Usercontroller
{
    public function register(){
        if($_SERVER['REQUEST_METHOF'] == 'POST'){
           $data = [
            'nome' => $_POST['nome'], 
            'email' => $_POST['email'],
            'senha' => password_hash($_POST['senha'], PASSWORD_DEFAULT), 
             'perfil'=> $_POST['perfil']
           ];

           User::create($data);
        }else{
            // Se a requisição não for POST (por exemplp,GET), carrega a página de registro
            include 'views/register.php';
        }
    }  
}

?>