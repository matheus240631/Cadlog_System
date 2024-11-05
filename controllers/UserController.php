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

    public function edit($id){
       session_start();
       
       // Permitir que admin e gestor editem
       if($_SESSION['perfil'] == 'adin' || $_SESSION['perfil'] == 'gestor'){
         $user = User::find($id);


         if($_SESSION['REQUEST_METHOD'] == 'POST'){

            $data = [
                'nome' => $_POST['nome'], 
                'email' => $_POST['email'],
                 'perfil'=> $_POST['perfil']
               ];

               User::update($id, $data);
               header('Location: index.php?action=list');
         }else{
           include 'views/edit_user.php';
         }
       }else{
         echo 'Você não tem permissão para editar usuários';
       }

    }

}

?>