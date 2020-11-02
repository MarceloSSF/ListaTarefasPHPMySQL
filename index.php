<?php
    if(isset($_GET['erro'])){
        if($_GET['erro'] == 1) {
            $erro = 'Acesso negado!' ;
        } else if ($_GET['erro'] == 2){
            echo "<script>alert('Login ou Senha inválido(s)! Tente novamente.');</script>";
        } else {
            $erro = "";
        }
    } else if (isset($_GET['cad'])){
        if ($_GET['cad'] == 1) {
            $cad = 'Usuário Cadastrado com Sucesso!';
        } else {
            $cad = "";
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
        <span><?php echo $erro; ?></span><br>
        <span><?php echo $cad; ?></span><br>
        <button>Enviar</button>
    </form>
    <a href="cadastro.php">Cadastre-se</a>
</body>
</html>