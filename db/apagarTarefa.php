<?php

   require_once("connection.php");
   session_start();

   $codigoIdentificador = $_GET['cod'];
   $titulo = $_POST['titulo'];
   $descricao = $_POST['descricao'];
   $dataHoraInicio = date_Format(date_create($_POST['dataHoraInicio']), 'Y-m-d H:i'); 
   $dataHoraTermino = date_Format(date_create($_POST['dataHoraTermino']), 'Y-m-d H:i');
   $statusTarefa = $_POST['statusTarefa'];

    $sql = "DELETE FROM Tarefa WHERE codigoIdentificador = $codigoIdentificador";

    $resultado = mysqli_query($con, $sql) or die (mysqli_error($con));
    $num = mysqli_affected_rows($con);

    if($num > 0) {
       header('location:../home.php?inf=5');
    } 


?>