<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assentos</title>
</head>
<body>  
    <center>
            <h1>Assentos</h1>
            <?php
            session_start();
            echo "<h2>Escolha um assento para o voo</h2><br>";
            echo "Com origem em " . $_SESSION['Origem'];
            if(!empty($_SESSION['Conexoes'])){
                echo "<p>Com Conexão/Conexões em ";
                foreach($_SESSION['Conexoes'] as $con){
                    echo $con . ", ";
                }
            }
            echo "</p><p> E destino em " . $_SESSION['Destino'] . "</p>";
            ?>
            <br>
            <table border=1>
                <tr>
                    <td><strong>Assento</strong></td>
                    <td><strong>Disponivel</strong></td>
                    <td><strong>Ação</strong></td>
                </tr>
                <tr>
                    <?php
                        $numero_assentos = sizeof($_SESSION['assentos']);
                        foreach($_SESSION['assentos'] as $assento){
                            echo "<tr>";
                            echo "<td>".$assento[0]."</td>";
                            echo "<td>".$assento[1]."</td>";
                            echo '<td>
                                <form action="assento_verifica.php" method="post">
                                    <input type="hidden" name="Assento" value="'.$assento[0].'">
                                    <input type="hidden" name="disponivel" value="'.$assento[1].'">
                                    <input type="submit" value="Comprar">
                                </form>
                            </td>';
                            echo "</tr>";
                        }
                    ?>
                </tr>
            </table>
        </center>
</body>
</html>