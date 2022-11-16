<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
</head>
<body>
    <center>
        <form action="RegistraConsulta_verifica.php" method="post">
            <label for="idPaciente">Informe o Código do Paciente:</label><br>
            <input type="text" name="idPaciente" placeholder="Ex: 1"><br>
            <label for="nomePaciente">Informe o Nome do Paciente:</label><br>
            <input type="text" name="nomePaciente" placeholder="Ex: Carlos"><br>
            <label for="crm">Informe o CRM do Médico Responsavel:</label><br>
            <input type="text" name="crm" placeholder="Ex: 12345"><br>
            <label for="nomeMedico">Informe o Nome do Médico Responsavel:</label><br>
            <input type="text" name="nomeMedico" placeholder="Ex: João"><br>
            <label for="motivo">Informe o Motivo da Consulta:</label><br>
            <textarea name="motivo" cols="30" rows="10"></textarea><br>
            <label for="data">Escolha a data desejada para consulta:</label><br>
            <input type="date" name="data"><br>
            <input type="submit" value="Registrar Consulta">
        </form>
    </center>
</body>
</html>