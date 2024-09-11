<?php

// inclui arquivos de controlador para lidar com diferente ações
require 'controllers/AuthController.php';
// inclui o controlador de autenticação 
require 'controllers/UserController.php';
// inclui o controlador de usuário
require 'controllers/DashboardController.php';
// inclui o controlador de dashboard

// cria instâncias dos controladores para utilizar seus métodos
$autoControler = new AuthController();
// instancia o controlador de autenticalão


//coleta a ação da URL, se não houver definida, usa 'login' por padrão 
$actin = $_GET['action'] ?? 'login'; // usa operador de coalescência nula (??) para definir 'login' se 'action' não estiver presente


switch($actin){
    case 'login':
         $autoControler->login(); //chama o método login do controlador de autenticação
}
?>