<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de Arquuivo</title>
</head>
<body>
    <form action="arquivo.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="200">
        Enviar este arquivo: <input name="userfile" type="file">
        <input type="submit" value="Enviar Arquivo">
    </form>
</body>
</html>