<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
</head>
<body>
    <div align="center" id="contato_form">
        <form action="enviar.php" name="form_contato" method="post">
            <p class="titulo">Formulario <small class="asteristico">*Campos Obrigatorios</small></p>
            <table align="center">
                <tr>
                    <td>Nome: <sup class="asteristico">*</sup></td>
                    <td>
                        <input type="text" name="nome" maxlength="40"/>
                    </td>
                </tr>
                <tr>
                    <td>E-mail:<sup class="asteristico">*</sup></td>
                    <td>
                        <input type="email" name="email" maxlength="30"/>
                    </td>
                </tr>
                <tr>
                    <td>Telefone:<sup class="asteristico">*</sup></td>
                    <td>
                        <input type="text" name="telefone" maxlength="14"/>
                    </td>
                </tr>
                <tr>
                    <td>Opções:<sup class="asteristico">*</sup></td>
                    <td>
                        <select name="escolhas" class="campo_input">
                            <option value="Opção 1">Opção 1</option>
                            <option value="Opção 2">Opção 2</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Mensagem:<sup class="asteristico">*</sup></td>
                    <td>
                        <textarea name="msg" cols="16" rows="5"></textarea>
                    </td>
                </tr>
                <tr align="right">
                    <td colspan="2">
                        <input type="reset" class="campo_submit" value="Limpar"/>
                        <input type="submit" class="campo_submit" value="Enviar"/>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="right"><small class="asteristico">*Campos obrigatorios</small>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>