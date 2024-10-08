<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar-se</title>
</head>
<body>
   <div>
      <h2>Cadastro de usuário</h2>
       <form action="index.php?action=register" method="post">
           <label for="nome">Nome</label>
           <input type="text" name="nome" id="nome" require> 

           <label for="email">Email</label>
           <input type="email" name="email" id="email" require>

           <label for="senha">Senha</label>
           <input type="senha" name="senha" id="senha" require>
           
           <label for="perfil">Perfil</label>
           <select name="perfil" id="perfil" require>
            <option value="admin">Admin</option>
            <option value="gestor">Gestor</option>
            <option value="colaborador">Colaborador</option>
           </select>

           <button type="submit">Cadastrar</button>
       </form>
       <a href="index.php?ation=login"> Voltsr ao Login</a>  
   </div> 
</body>
</html>