<?php

class Conecta{

    function inserir($nome,$marca){
        $servername = "localhost";
        $database = "almoxarifado";
        $username = "root";
        $password = "root";

        $con = mysqli_connect($servername,$username,$password,$database);
        if(empty($con)){
            die("Conexão falhou :( : " . mysqli_connect_error());
        }

        $sql = "INSERT INTO `tb_ferramentas` (`nome_ferramenta`,`marca_ferramenta`) VALUES ('$nome','$marca')";

        if($con->query($sql) == TRUE && $nome != null && $marca != null){
            $con->close();
            return true;
        }else{
            $con->close();
            return false;
        } 
    }

    function alterar($cod_ferr,$nome,$marca){
        $servername = "localhost";
        $database = "almoxarifado";
        $username = "root";
        $password = "root";

        $con = mysqli_connect($servername,$username,$password,$database);
        if(empty($con)){
            die("Conexão falhou :( : " . mysqli_connect_error());
        }

        $sql = "UPDATE `tb_ferramentas` SET `nome_ferramenta`='$nome',`marca_ferramenta`='$marca' WHERE `cod_ferramenta`= '$cod_ferr';";

        if ($con->query($sql) === TRUE) {
            $con->close();
            return true;
        } else {
            $con->close();
            return true;
        }
    }

    function excluir($cod_ferr,$nome,$marca){
        $servername = "localhost";
        $database = "almoxarifado";
        $username = "root";
        $password = "root";

        $con = mysqli_connect($servername,$username,$password,$database);
        if(empty($con)){
            die("Conexão falhou :( : " . mysqli_connect_error());
        }

        $sql = "DELETE FROM `tb_ferramentas` WHERE `cod_ferramenta`= $cod_ferr AND `nome_ferramenta`= '$nome' AND `marca_ferramenta`= '$marca'";

        if ($con->query($sql) === TRUE) {
            $con->close();
            return true;
        } else {
            $con->close();
            return true;
        }
    }

    function painel(){
        $servername = "localhost";
        $database = "almoxarifado";
        $username = "root";
        $password = "root";

        $x=0;
        $ferramentas;
        $con = mysqli_connect($servername,$username,$password,$database);
        if(empty($con)){
            die("Conexão falhou :( : " . mysqli_connect_error());
        }
        $result = $con->query("SELECT * FROM `tb_ferramentas` WHERE 1");
            while($aux_query = $result->fetch_assoc()){
                $ferramentas[$x][0] = $aux_query['cod_ferramenta'];
                $ferramentas[$x][1] = $aux_query['nome_ferramenta'];
                $ferramentas[$x][2] = $aux_query['marca_ferramenta'];
                $x++;
            }
        return $ferramentas;
    }
}

