<?php

require_once("connection.php");

session_start();

$loginVerifica = $_POST['loginUsuario'];
$senhaVerifica = $_POST['senha'];

$queryVerifica = "SELECT * FROM $nomeBanco.Usuario WHERE loginUsuario = '".$loginVerifica."' and senha = '".$senhaVerifica."'";

$resultadoVerifica = mysqli_query($con, $queryVerifica);

if (mysqli_num_rows($resultadoVerifica) > 0) {

    $dados = mysqli_fetch_array($resultadoVerifica);
    $_SESSION['login'] = $dados['loginUsuario'];
    $_SESSION['senha'] = $dados['senha'];
    header('Location:http://'.$site.'home.php');

} else {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('location:http://'.$site.'index.php?erro=2');

}

?>