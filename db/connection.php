<?php

    $servidor = "127.0.0.1";
    $usuario = "root";
    $senha = "Sport100###";
    $nomeBanco = "listaTarefas";
    $site = "localhost/ListaTarefas/";

    $con = new mysqli($servidor, $usuario, $senha, $nomeBanco);

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
        }else{
        echo "Conectou !!";
        } 

    ?>
