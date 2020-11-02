<?php

   require_once("connection.php");
   session_start();

   $titulo = $_POST['titulo'];
   $descricao = $_POST['descricao'];
   $dataHoraInicio = date_Format(date_create($_POST['dataHoraInicio']), 'Y-m-d H:i'); 
   $dataHoraTermino = date_Format(date_create($_POST['dataHoraTermino']), 'Y-m-d H:i');
   $statusTarefaS = $_POST['statusTarefa'];
   $codigoIdUsuario = $_SESSION['codigoIdentificador'];

    $sql = "INSERT INTO $nomeBanco.Tarefa (titulo, descricao, dataHoraInicio, dataHoraTermino, statusTarefa, codigoIdUsuario)
            VALUES ('$titulo', '$descricao', '$dataHoraInicio', '$dataHoraTermino', '$statusTarefaS', '$codigoIdUsuario')";

    $resultado = mysqli_query($con, $sql) or die (mysqli_error($con));
    $num = mysqli_affected_rows($con);

    if($num > 0) {
       header("Location:../home.php?inf=3");
    } 


?>