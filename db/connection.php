<?php

    $servidor = "127.0.0.1";
    $usuario = "root";
    $senha = "";
    $nomeBanco = "listaTarefas";

    $con = mysqli_connect($servidor, $usuario, $senha) or die ('Erro de conexão com Banco de Dados: '. mysqli_error($con));
    mysqli_select_db($con, $nomeBanco) or die ('Erro de seleção do Banco de Dados'.mysqli_error($con));

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error($con));
    
    } 

    ?>
