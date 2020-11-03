function validarSenha(){
    $senha = document.getElementById("senha").value;
    $senha2 = document.getElementById("senha2").value;

    if($senha != $senha2) {
        $senha2 = document.getElementById("senha2").style.border = "red 4px solid";
    } else {
        $senha2 = document.getElementById("senha2").style.border = "green 4px solid";
    }
}   