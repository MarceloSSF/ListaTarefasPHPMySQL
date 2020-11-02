<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Usuário</title>
</head>
<body>
    <form action="db/cadastrarUsuario.php" method="post">
        Login: 
        <input type="text" name="loginUsuariogit init"><br>
        Senha: 
        <input type="password" name="senha" id="senha" onkeyup="validarSenha()"><br>
        Confirmação de senha: 
        <input type="password" name="senha2" id="senha2" onkeyup="validarSenha()"> <br>
        <button>Cadastrar</button>
    </form>
    
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

</body>
</html>