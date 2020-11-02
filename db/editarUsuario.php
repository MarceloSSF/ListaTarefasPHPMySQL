<?php

   require_once("connection.php");
   session_start();

   $codigoIdentificador = $_GET['cod'];
   $loginUsuario = $_POST['loginUsuario'];
   $senha = $_POST['senha'];

    $sql = "UPDATE Usuario SET 
            loginUsuario = '$loginUsuario', 
            senha = '$senha' 
            WHERE codigoIdentificador = '$codigoIdentificador'";

    $resultado = mysqli_query($con, $sql) or die (mysqli_error($con));
    $num = mysqli_affected_rows($con);

    if($num > 0) {
       header('location:http://'.$site.'home.php?inf=6');
    } 


?>