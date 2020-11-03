<?php
    require_once("bloquear.php");

    $cod = $_GET['cod'];
    $sql = "SELECT * FROM Tarefa WHERE codigoIdentificador = $cod";
    $resultadoTarefas = mysqli_query($con, $sql);
    $tarefaSelecionada = mysqli_fetch_array($resultadoTarefas);

    define('CSS_PATH', 'css/');
    define('JS_PATH', 'js/');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Tarefas</title>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH; ?>style.css">
    <script type="text/javascript" src="<?php echo JS_PATH; ?>script.js"></script>
</head>
<body>
    
    <div class="container"> 
    <div class="box">
    <form action="cadastroTarefa.php"> <button>Cadastrar Tarefas</button> </form>
    <form action="home.php"><button>Listar Tarefas</button></form>

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

    <form action="db/sair.php"><button>Logout</button></form>
</div>
</div>
</body>
</html>