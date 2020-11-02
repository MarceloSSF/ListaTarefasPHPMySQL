function validarSenha(){
    alert(Funcionou)
}

function mensagemRetorno(msg){
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
}