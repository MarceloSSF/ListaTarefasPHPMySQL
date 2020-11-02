<?php
   require_once("connection.php");

    $loginUsuario = $_POST['loginUsuario'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO $nomeBanco.Usuario (loginUsuario, senha)
            VALUES ('$loginUsuario', '$senha')";

    $resultado = mysqli_query($con, $sql) or die (mysqli_error($con));
    $num = mysqli_affected_rows($con);

    if($num > 0) {
        echo "Conectou !!";
        header("Location:../index.php?cad=1");
    } 

?>