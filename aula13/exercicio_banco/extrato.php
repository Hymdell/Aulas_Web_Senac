<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extrato</title>
</head>
<body>
    <center>
        <table border=1>
            <tr>
                <td><strong>Número da Conta</strong></td>
                <td><strong>Valor</strong></td>
                <td><strong>Ação</strong></td>
            </tr>
            <tr>
                <?php
                    session_start();
                    $numeros_extratos = sizeof($_SESSION['extrato']);
                    foreach($_SESSION['extrato'] as $extrato){
                        echo "<tr>";
                        echo "<td>".$extrato[0]."</td>";
                        echo "<td>".$extrato[1]."</td>";
                        echo "<td>".$extrato[2]."</td>";
                        echo "</tr>";
                    }
                ?>
            </tr>
        </table>
        <br>
        <form action="menu.php">
            <input type="submit" value="Voltar ao Menu">
        </form>
    </center>
</body>
</html>