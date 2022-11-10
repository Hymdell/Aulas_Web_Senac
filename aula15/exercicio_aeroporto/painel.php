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
        <h1>VOOS</h1>
        <br>
        <table border=1>
            <tr>
                <td><strong>Voo número</strong></td>
                <td><strong>Origem</strong></td>
                <td><strong>Destino</strong></td>
                <td><strong>Conexoes</strong></td>
            </tr>
            <tr>
                <?php
                    session_start();
                    $numero_voos = sizeof($_SESSION['voos']);
                    foreach($_SESSION['voos'] as $v){
                        echo "<tr>";
                        echo "<td>".$v[0]."</td>";
                        echo "<td>".$v[1]."</td>";
                        echo "<td>".$v[2]."</td>";
                        echo "<td>".$v[3]."</td>";
                        echo "</tr>";
                    }
                ?>
            </tr>
        </table>
        <form action="index.php">
            <input type="submit" value="Voltar">
        </form>
    </center>
</body>
</html>