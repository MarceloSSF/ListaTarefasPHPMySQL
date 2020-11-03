<?php
    define('CSS_PATH', 'css/');
    
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
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH; ?>style.css">
    <script language="JavaScript" src="js/msgs.js"></script>
</head>

<body>
    <div class="container"> 
    <div class="box">
        <h3>Login </h3>
        
        <form action="db/verificaLogin.php" method="post"> 
            Usuário:
            <input type="text" name="loginUsuario"> <br>
            Senha:
            <input type="password" name="senha"><br>
            <span></span>
            <button>Enviar</button>
        </form>
     
        <form action="cadastroUsuario.php" method="post">
            <button>Cadastre-se</button>
        </form>
    </div>    
    </div>    
</body>
</html>