<?php
session_start();
    if(!isset($_SESSION['login']) and !isset($_SESSION['senha'])){
        header("Location:index.php?erro=1");
    } 

require_once("db/connection.php");    
?>