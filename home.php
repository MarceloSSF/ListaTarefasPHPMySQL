<?php
    require_once("bloquear.php");
    if (isset($_GET['inf'])){
        if ($_GET['inf'] == 2) {
            echo "<script>alert('Logout Finalizado! Volte Sempre.');</script>";
        } else if ($_GET['inf'] == 3) {
            echo "<script>alert('Nova tarefa cadastrada com sucesso!');</script>";
        }
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
    <a href="cadastroTarefa.php">Cadastrar Tarefa</a>
    <a href="">Listar Tarefas</a>
    <a href="db/sair.php">Sair</a><br><br>
    <a href="">Alterar Dados</a>

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
