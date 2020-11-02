<?php
    require_once("bloquear.php");
    if (isset($_GET['inf'])){
        if ($_GET['inf'] == 2) {
            echo "<script>alert('Logout Finalizado! Volte Sempre.');</script>";
        } else if ($_GET['inf'] == 3) {
            echo "<script>alert('Nova tarefa cadastrada com sucesso!');</script>";
        } else if ($_GET['inf'] == 4) {
            echo "<script>alert('Edição realizada com sucesso!');</script>";
        } else if ($_GET['inf'] == 5) {
            echo "<script>alert('Tarefa removida!');</script>";
        } else if ($_GET['inf'] == 6) {
            echo "<script>alert('Dados alterados com sucesso!');</script>";
        }
    }

    $cod = $_SESSION['codigoIdentificador'];
    $sql = "SELECT codigoIdentificador, titulo, descricao, dataHoraInicio, dataHoraTermino, statusTarefa FROM Tarefa 
            WHERE codigoIdUsuario = $cod ORDER BY dataHoraInicio ASC";
    $resultadoTarefas = mysqli_query($con, $sql);

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

    <table border="1">
        <tr>
            <td>Título</td>
            <td>Descrição</td>
            <td>Data Início</td>
            <td>Hora Início</td>
            <td>Data Término</td>
            <td>Hora Término</td>
            <td>Status</td>
            <td>Opções</td>
        </tr>

        <?php foreach ($resultadoTarefas as $Tarefa) {?>

        <tr>
            <td><?=$Tarefa['titulo']?></td>
            <td><?=$Tarefa['descricao']?></td>
            <td><?=date("d.m.Y", strtotime($Tarefa['dataHoraInicio']));?></td>
            <td><?=date("H:i", strtotime($Tarefa['dataHoraInicio'])); ?></td>
            <td><?=date("d.m.Y", strtotime($Tarefa['dataHoraTermino']));?></td>
            <td><?=date("H:i", strtotime($Tarefa['dataHoraInicio']));?></td>
            <td><?=$Tarefa['statusTarefa']?></td>
            <td>
                <a href="editorTarefa.php?cod=<?= $Tarefa['codigoIdentificador']?>">Editar</a>
                <a href="db/apagarTarefa.php?cod=<?= $Tarefa['codigoIdentificador']?>"> Remover</a>
            </td>
        </tr>
    <?php } ?>
    </table>
    <br>    
    <a href="editorDadosUsuario.php?cod=<?=$cod?>">Alterar Dados da Conta</a>
</body>
</html>
