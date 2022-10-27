<?php
    $arquivo = "uploads/".basename($_FILES["arquivo"]["name"]);
    $tipo_imagem = strtolower(pathinfo($arquivo,PATHINFO_EXTENSION));

    if(isset($_POST["submit"])) {
        $tamanho_imagem = getimagesize($_FILES["arquivo"]["tmp_name"]);
    }
    $mime =$tamanho_imagem["mime"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=1>
        <tr>
            <td>
                <?php echo "Tipo de arquivo: " . $tipo_imagem ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo "Tamanho da imagem: " . $tamanho_imagem[0] . "x" . $tamanho_imagem[1]; ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo "Mime: ". $mime; ?>
            </td>
        </tr>
    </table>
    <?php echo "<img src=".$arquivo." height=200 width=300 />"; ?>
</body>
</html>