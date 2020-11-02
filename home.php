<?php
session_start();
    if(!isset($_SESSION['login']) and !isset($_SESSION['senha'])){
        header("Location:index.php?erro=1");
    } 
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAREFAS</title>
</head>
<body>
    <a href="">Cadastrar Tarefa</a>
    <a href="">Listar Tarefas</a>
    <a href="">Sair</a><br><br>

    <table border="1">
        <tr>
            <td>Título</td>
            <td>Descrição</td>
            <td>Data e Hora de Início</td>
            <td>Data e Hora Término</td>
            <td>Status</td>
            <td>Opções</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>

</body>
</html>
