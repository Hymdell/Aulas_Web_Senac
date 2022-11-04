<?php
session_start();
if($_SESSION['id'] == null){
    header("Location:http://localhost/aulas/aula13/exercicio_banco/");
}
?>
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta</title>
    <style>
        .fundoCores{
            background: hsla(30, 92%, 54%, 1);
            background: linear-gradient(90deg, hsla(30, 92%, 54%, 1) 0%, hsla(29, 95%, 74%, 1) 50%, hsla(208, 100%, 28%, 1) 100%);
        }
    </style>
</head>
<body class='fundoCores'>
    <center>
        <table border=1>
        <tr>
            <td><strong>Número da conta</strong></td>
            <td><strong>Nome de Usuário</strong></td>
            <td><strong>Saldo da Conta</strong></td>
        </tr>
        <tr>
            <td><?php echo $_SESSION['id'];?></td>
            <td><?php echo $_SESSION['usuario'];?></td>
            <td><?php echo $_SESSION['saldo'];?></td>
        </tr>
        </table>
        <br>
        <form action="verifica_extrato.php" method="post">
            <input type="hidden" name="id" <?php echo "value='" . $_SESSION['id'] . "'";?>>
            <input type="submit" value="Ver Extrato">
        </form>
        <table>
            <tr>
                <td>
                    <form action="depositar.php" method="post">
                        <label for="depositar"><strong>Depositar</strong></label><br>
                        <input type="hidden" name="id" <?php echo "value='" . $_SESSION['id'] . "'";?>>
                        <input type="text" name="depositar">
                        <input type="submit" value="Depositar">
                    </form>
                </td>
            </tr>
            <tr>
            <td>
                <form action="sacar.php" method="post">
                    <label for="sacar"><strong>Sacar</strong></label><br>
                    <input type="hidden" name="id" <?php echo "value='" . $_SESSION['id'] . "'";?>>
                    <input type="text" name="sacar">
                    <input type="submit" value="Sacar">
                </form>
                </td>
            </tr>
        </table>
        <br>
        <form action="deslogar.php" method="post">
            <?php session_destroy();?>
            <input type="submit" value="Deslogar">
        </form>
    </center>
</body>
</html>