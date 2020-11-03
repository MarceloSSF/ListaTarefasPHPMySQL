<?php
    require_once("bloquear.php");

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
    
    <form action="home.php"><button>Listar Tarefas</button></form>

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

    <form action="db/sair.php"><button>Logout</button></form>

</div>
</div>
</body>
</html>