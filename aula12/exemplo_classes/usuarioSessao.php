<?php
class UsuarioSessao {
    var $nome;
    var $login;

    function construtor($login, $nome){
        $this->login = $login;
        $this->nome = $nome;
    }
    function get_nome(){
        return $this->nome;
    }
}
?>