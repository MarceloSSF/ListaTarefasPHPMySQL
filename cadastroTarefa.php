<?php
    require_once("bloquear.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Tarefas</title>
</head>
<body>
    <a href="cadastroTarefa.php">Cadastrar Tarefa</a>
    <a href="home.php">Listar Tarefas</a>
    <a href="db/sair.php">Sair</a><br><br>

    <h3>CADASTRO DE TAREFAS</h3>

    <form action="db/cadastrarTarefa.php" method="post">
        Título: 
        <input type="text" name="titulo" id="titulo"><br>
        Descrição: 
        <textarea name="descricao" id="descricao" cols="30" rows="10"></textarea><br>
        Data e Hora Início: 
        <input type="datetime-local" name="dataHoraInicio" id="dataHoraInicio"> <br>
        Data e Hora Término:
        <input type="datetime-local" name="dataHoraTermino" id="dataHoraTermino"> <br>
        Status:
        <input type="text" name="statusTarefa" id="statusTarefa"> <br>
        <br>
        <button>Cadastrar</button>
    </form>

</body>
</html>