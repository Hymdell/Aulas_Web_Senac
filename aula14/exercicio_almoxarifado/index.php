<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <style>
        .fundoCores{
            background: hsla(30, 92%, 54%, 1);
            background: linear-gradient(90deg, hsla(30, 92%, 54%, 1) 0%, hsla(29, 95%, 74%, 1) 50%, hsla(208, 100%, 28%, 1) 100%);
        }
        .borda{
            border-radius: 15px / 50px;
            border-style: solid;
            background: #004b8d;
            width: 200px;
            height: 300px; 

            
            position:fixed;
            left:50%;
            top:40%;
            margin-left:-100px;
            margin-top:-100px;
        }
        .botoes{
            border-radius: 15px / 50px;
            font-weight: bold;
            padding: 20px;
        }
    </style>
</head>
<body class="fundoCores">
    <center>
    <div class="borda">
        <form action="painel_valida.php">
            <input class="botoes" type="submit" value="Painel">
        </form>
        <br>
        <form action="inserir_ferr.php">
            <input class="botoes" type="submit" value="Inserir Ferramenta">
        </form>
        <br>
        <form action="altera_ferr.php">
            <input class="botoes" type="submit" value="Alterar Ferramenta">
        </form>
        <br>
        <form action="exclui_ferr.php">
            <input class="botoes" type="submit" value="Excluir Ferramenta">
        </form>
    </div>
    </center>
</body>
</html>