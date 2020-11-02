<?php
    require_once("bloquear.php");

    $cod = $_GET['cod'];
    $sql = "SELECT * FROM Tarefa WHERE codigoIdentificador = $cod";
    $resultadoTarefas = mysqli_query($con, $sql);
    $tarefaSelecionada = mysqli_fetch_array($resultadoTarefas);
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

    <h3>EDITOR DE TAREFAS</h3>

    <form action="db/updateTarefa.php?cod=<?=$cod?>" method="post">
        Título: 
        <input type="text" name="titulo" value="<?=$tarefaSelecionada['titulo']?>"><br>
        Descrição: 
        <textarea name="descricao" id="descricao" cols="30" rows="10"> <?=$tarefaSelecionada['descricao']?></textarea><br>
        Data e Hora Início: 
        <input type="datetime-local" name="dataHoraInicio" value="<?=$tarefaSelecionada['dataHoraInicio']?>"> <br>
        Data e Hora Término:
        <input type="datetime-local" name="dataHoraTermino" value="<?=$tarefaSelecionada['dataHoraTermino']?>"> <br>
        Status:
        <input type="text" name="statusTarefa" value="<?=$tarefaSelecionada['statusTarefa']?>"> <br>
        <br>
        <button>Editar</button>
    </form>

</body>
</html>