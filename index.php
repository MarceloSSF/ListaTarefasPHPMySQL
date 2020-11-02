<?php
    if(isset($_GET['erro'])){
        if($_GET['erro'] == 1) {
            echo "<script>alert('Acesso Negado');</script>";
        } else if ($_GET['erro'] == 2){
            echo "<script>alert('Login ou Senha inválido(s)! Tente novamente.');</script>";
        } 

    } else if (isset($_GET['inf'])){
        if ($_GET['inf'] == 1) {
            echo "<script>alert('Usuário cadastrado com sucesso!');</script>";
        } else if ($_GET['inf'] == 2) {
            echo "<script>alert('Logout Finalizado! Volte Sempre.');</script>";
        } 
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Cadastro de Tarefas</title>
</head>

<body>
    <h3>Login</h3>
    <form action="db/verificaLogin.php" method="post"> 
        Login:
        <input type="text" name="loginUsuario"> <br>
        Senha:
        <input type="password" name="senha"><br>
        <span></span>
        <button>Enviar</button>
    </form>
    <a href="cadastroUsuario.php">Cadastre-se</a>
</body>
</html>