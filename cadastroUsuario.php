<?php
    define('CSS_PATH', 'css/');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Usuário</title>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH; ?>style.css">
    <script language="JavaScript" src="js/controleSenha.js"></script>
</head>
<body>

    <div class="container"> 
    <div class="box">

    <h3> CADASTRO DE NOVO USUÁRIO </h3> <br>
    
    <form action="db/cadastrarUsuario.php" method="post">
        Login: 
        <input type="text" name="loginUsuario"><br>
        Senha: 
        <input type="password" name="senha" id="senha" onkeyup="validarSenha()"><br>
        Confirmação de senha: 
        <input type="password" name="senha2" id="senha2" onkeyup="validarSenha()"> <br>
        <button>Cadastrar</button>
    </form>

    <form action="index.php">
        <button>Voltar para login</button>
    </form> <br>

</div>
</div>
</body>
</html>