<?php
    if(isset($_GET['erro'])){
        if($_GET['erro'] == 1) {
            $erro = 'Acesso negado!' ;
        }
    } else {
        $erro = "";
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
        <input type="text" name="login"> <br>
        Senha:
        <input type="password" name="senha"><br>
        <span><?php echo $erro; ?></span><br>
        <button>Enviar</button>
    </form>
    <a href="cadastro.php">Cadastre-se</a>
</body>
</html>