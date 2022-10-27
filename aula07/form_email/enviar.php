<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$opcoes = $_POST['escolhas'];
$mensagem = $_POST['msg'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');

$arquivo = "
<style type ='text/css'>
body {
    margin:0px;
    font-family:Verdane;
    font-size:12px;
    color:#666666;
}
a{
    color: #666666;
    text-decoration: none;
}
a:hover {
    color: #FF0000;
    text-decoration: none;
}
    <html>
        <table width='510' border='1' cellpadding='1' cellpacing='1' bgcolor='#CCCCCC'>
        <tr>
            <td>
                <tr>
                    <td width='500'>Nome:$nome</td>
                </tr>
                <tr>
                    <td width='320'>E-mail:<b>$email</b></td>
                </tr>
                <tr>
                    <td width='320'>Telefone;<b>$telefone</b></td>
                </tr>
                <tr>
                    <td width='320'>Opções:$opcoes</td>
                </tr>
                <tr>
                    <td width='320'>Mensagem:$nome</td>
                </tr>
            </td>
        </tr>
        <tr>
            <td>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></td>
        </tr>
        </table>
    </html>
    ";

$emailenviar = "cristopherpiussi@gmail.com";
$destino = $emailenviar;
$assunto = "Contato pelo site";

$headers = 'MIME-Version: 1.0'."\r\n";
$headers .= 'From: Cris <cristopherpiussi@gmail.com>'."\r\n";
$headers .=  'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$enviaremail = mail($destino, $assunto, $arquivo, $headers);
if($enviaremail){
    $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
    echo " <meta http-equiv='refresh' content='10;URL=contato.php'>";
}else{
    $mgm = "ERRO AO ENVIAR E-MAIL!";
    echo "";
}
?>