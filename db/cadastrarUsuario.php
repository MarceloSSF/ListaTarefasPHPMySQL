<?php
   require_once("connection.php");

    $loginUsuario = $_POST['loginUsuario'];
    $senha = md5($_POST['senha']);

    $sql = "INSERT INTO $nomeBanco.Usuario (loginUsuario, senha)
            VALUES ('$loginUsuario', '$senha')";

    $resultado = mysqli_query($con, $sql);

    if($resultado) {
        echo "Conectou !!";
        header("Location:../index.php");
    } else {
        die("Connection failed: " . $con->connect_error);
    }