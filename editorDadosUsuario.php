<?php
    require_once("bloquear.php");
    
    $cod = $_GET['cod'];
    $sql = "SELECT * FROM Usuario WHERE codigoIdentificador = $cod";
    $resultadoUsuario = mysqli_query($con, $sql);


    define('CSS_PATH', 'css/');
    define('JS_PATH', 'js/');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração de dados do Perfil</title>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH; ?>style.css">
    <script type="text/javascript" src="<?php echo JS_PATH; ?>script.js"></script>
</head>
<body>
    <div class="container"> 
    <div class="box">
    <form action="home.php"><button>Listar Tarefas</button></form>
    
    <h3>Alteração de Dados Pessoais</h3>

    <form action="db/editarUsuario.php?cod=<?=$cod?>" method="post">
        Login: 
        <input type="text" name="loginUsuario"><br>
        Senha: 
        <input type="password" name="senha" id="senha" onkeyup="validarSenha()"><br>
        Confirmação de senha: 
        <input type="password" name="senha2" id="senha2" onkeyup="validarSenha()"> <br>
        <button>Alterar</button>
    </form>
    

    <form action="db/sair.php"><button>Logout</button></form>
    
    <script>
        function validarSenha(){
            $senha = document.getElementById("senha").value;
            $senha2 = document.getElementById("senha2").value;

            if($senha != $senha2) {
                $senha2 = document.getElementById("senha2").style.border = "red 4px solid";
            } else {
                $senha2 = document.getElementById("senha2").style.border = "green 4px solid";
            }
        }    
    </script>
    </div>
    </div>
</body>
</html>