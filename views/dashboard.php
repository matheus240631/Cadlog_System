<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" type='text/css' media='screen' href="">
</head>
 
<body class=""> <!-- Define a classe com base no perfil -->
    <div class="container">
        <h1>Bem-vindo, Usuario!</h1>
        <p>Esta é a visão do perfil PERFIL.</p>
            <!-- Admin pode gerenciar usuários (editar e excluir) -->
             <? if($_SESSION['perfil'] == 'admin'): ?>
            <a href="index.php?action=list" class="btn">Gerenciar Usuários (Admin)</a>
 
            <?php elseif($_SESSION['perfil'] == 'gester'): ?>
            <!-- Gestor pode gerenciar usuários (apenas editar) -->
            <a href="index.php?action=list" class="btn">Gerenciar Usuários (Gestor)</a>
            <p>Área exclusiva do Gestor.</p>
            
            <?php else: ?>
            <p>Área exclusiva do Colaborador.</p>
          <?php endif; ?>

        <br><br><br><br>
        <!-- Link para logout -->
        <a href="idex.php?action=logout" class="btn">Logout</a>
    </div>
</body>
 
</html>