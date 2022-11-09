<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locais</title>
</head>
<body>  
    <center>
            <h1>Assentos</h1>
            <h2>Caso não tenha assentos disponiveis volte e escolha outra classe</h2>
            <br>
            <table border=1>
                <tr>
                    <td><strong>Assento</strong></td>
                    <td><strong>Classe</strong></td>
                    <td><strong>Disponivel</strong></td>
                    <td><strong>Ação</strong></td>
                </tr>
                <tr>
                    <?php
                        session_start();
                        $numero_assentos = sizeof($_SESSION['assentos']);
                        foreach($_SESSION['assentos'] as $assento){
                            echo "<tr>";
                            echo "<td>".$assento[0]."</td>";
                            echo "<td>".$assento[1]."</td>";
                            echo "<td>".$assento[2]."</td>";
                            echo '<td>
                                <form action="locais_valida.php" method="post">
                                    <input type="hidden" name="assento" value="'.$assento[0].'">
                                    <input type="hidden" name="classe" value="'.$assento[1].'">
                                    <input type="hidden" name="disponivel" value="'.$assento[2].'">
                                    <input type="submit" value="Comprar">
                                </form>
                            </td>';
                            echo "</tr>";
                        }
                    ?>
                </tr>
            </table>
            <br>
            <form action="index.php">
                <input type="submit" value="Voltar">
            </form>
        </center>
</body>
</html>