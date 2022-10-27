<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
</head>
<body>
    <table border = 1>
        <tr>
            <td>Escola Técnica de Tramandaí - ETT</td>
        </tr>
        <tr>
            <td>Curso Básico: Ténico em Informática</td>
        </tr>
        <tr>
            <Td>Turno: Matutino</Td>
            <td>
                <?php
                echo "Turma: " . $_POST["turma"];
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                echo "Aluno: " . $_POST["nome"];
                ?>
            </td>
        </tr>
    </table>
</body>
</html>