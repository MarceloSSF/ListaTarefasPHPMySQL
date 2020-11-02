<?php

require_once("connection.php");

session_start();

$loginUsuario = $_POST['loginUsuario'];
$senha = md5($_POST['senha']);

$query = "SELECT * FROM $nomeBanco.Usuario WHERE loginUsuario = '".$loginUsuario."' and senha = '".$senha."'";

$result = mysqli_query($con, $query);

$dados = mysqli_fetch_array($result);
var_dump($dados);
if (mysqli_num_rows($result) > 0) {

    $_SESSION['loginUsuario'] = $dados['login'];
    $_SESSION['senha'] = $dados['senha'];
   header('Location:http://'.$site.'index.php');

} else {
    echo "<script>alert('Login ou Senha inválido(s)! Tente novamente.');</script>";
    unset($_SESSION['loginUsuario']);
    unset($_SESSION['senha']);
    echo $login;
    echo $senha;
    header('Location:http://'.$site.'login.php?erro=1');
}