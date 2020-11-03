<?php

    require_once("connection.php");
    session_start();
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('location:../index.php?inf=2');
    session_destroy();
?>