<?php

require_once("connection.php");

session_start();

$loginUsuario= $_POST['loginUsuario'];
$senha = $_POST['senha'];

$queryVerifica = "SELECT * FROM $nomeBanco.Usuario WHERE loginUsuario = '".$loginUsuario."' and senha = '".$senha."'";

$resultadoVerifica = mysqli_query($con, $queryVerifica);

if (mysqli_num_rows($resultadoVerifica) > 0) {

    $dados = mysqli_fetch_array($resultadoVerifica);
    $_SESSION['login'] = $dados['loginUsuario'];
    $_SESSION['senha'] = $dados['senha'];
    $_SESSION['codigoIdentificador'] = $dados['codigoIdentificador'];
    header('Location:../home.php');

} else {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('location:../index.php?erro=2');

}

?>