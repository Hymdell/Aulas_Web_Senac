<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas</title>
</head>
<body>
    <center>
        <h1>Consultas</h1>
        <br>
        <table border=1>
            <tr>
                <td><strong>Num Consulta</strong></td>
                <td><strong>Num do Paciente Atendido</strong></td>
                <td><strong>CRM do Médico responsável</strong></td>
                <td><strong>Nome do Médico</strong></td>
                <td><strong>Nome do Paciente</strong></td>
                <td><strong>Motivo da Consulta</strong></td>
                <td><strong>Data da consulta</strong></td>
            </tr>
            <tr>
                <?php
                    session_start();
                    foreach($_SESSION['Consultas'] as $c){
                        echo "<tr>";
                        echo "<td>".$c[0]."</td>";
                        echo "<td>".$c[1]."</td>";
                        echo "<td>".$c[2]."</td>";
                        echo "<td>".$c[3]."</td>";
                        echo "<td>".$c[4]."</td>";
                        echo "<td>".$c[5]."</td>";
                        echo "<td>".$c[6]."</td>";
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