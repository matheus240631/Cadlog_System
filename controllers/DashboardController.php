<?php

class DashboardController{

  public function index(){

  //inicia a sessão para verificar se ousuário está autenticado
  session_start();

  //verifica se a varião de sessão "usuário_id" está define
  //se não estiver, significa que o usuário não está autenticado
    if(!isset($_SESSION['usuario_id'])){
     header('Location: index.php');
     exit; // Garante que o scrip será interrompido   
    }
    include 'views/dashboard.php';
}
}
?>