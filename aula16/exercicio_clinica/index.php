<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <center>
        <form action="RegistraConsulta.php">
            <label for="submit">Registrar Consulta:</label>
            <input type="submit" name="submit" value="Registrar Consulta">
        </form>
        <br>
        <form action="RegistraMedico.php">
            <label for="submit">Registrar um novo médico:</label>
            <input type="submit" name="submit" value="Registrar novo médico">
        </form>
        <br>
        <form action="RegistraPaciente.php">
            <label for="submit">Registrar um novo Paciente:</label>
            <input type="submit" name="submit" value="Registrar novo paciente">
        </form>
        <br>
        <form action="VerAtendimento_verifica.php" method="POST">
            <label for="crm">Ver atendimentos registrados por um médico especifico:</label><br>
            <input type="text" name="crm" placeholder="Informe o CRM">
            <input type="submit" name="submit" value="Ver Atendimentos">
        </form>
    </center>
</body>
</html>