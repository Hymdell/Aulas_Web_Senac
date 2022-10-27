<?php
$uploaddir = "c://uploads/";
$uploadfile = $uploaddir.$_FILES['userfile']['name'];
print "<pre>";
if(move_uploaded_file($_FILES['userfile']['tmp_name'],$uploadfile)){
    print "O arquivo é valido e foi carregado com sucesso. Aqui está alguma informação:\n";
}else{
    print "Possivel ataque de upload! Aqui esta alguma informação:\n";
}