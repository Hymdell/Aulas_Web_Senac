<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body>
    <center>
        <h1>FERRAMENTAS</h1>
        <br>
        <table border=1>
            <tr>
                <td><strong>Cód</strong></td>
                <td><strong>Nome</strong></td>
                <td><strong>Marca</strong></td>
            </tr>
            <tr>
                <?php
                    session_start();
                    $numero_ferramentas = sizeof($_SESSION['ferramentas']);
                    foreach($_SESSION['ferramentas'] as $ferr){
                        echo "<tr>";
                        echo "<td>".$ferr[0]."</td>";
                        echo "<td>".$ferr[1]."</td>";
                        echo "<td>".$ferr[2]."</td>";
                        echo "</tr>";
                    }
                ?>
            </tr>
        </table>
    </center>
</body>
</html>