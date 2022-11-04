<?php
//session_start();

class Conexao{
    
    function login($usuario,$senha){
        $servername = "localhost";
        $database = "banco";
        $username = "root";
        $password = "root";
        $con = mysqli_connect($servername,$username,$password,$database);
        
        if(empty($con)){
            die("Conexão falhou :( : " . mysqli_connect_error());
        }

        $result = $con->query("SELECT `idUsuario`,`usuario`,`senha`,`saldo` FROM `usuarios` WHERE usuario='$usuario' AND senha='$senha'");
        $aux_query = $result->fetch_assoc();
        $_SESSION['id'] = $aux_query['idUsuario'];
        $_SESSION['usuario'] = $aux_query['usuario'];
        $_SESSION['saldo'] = $aux_query['saldo'];

        if($aux_query['usuario'] == $usuario && $aux_query['senha'] == $senha && $usuario != null && $senha != null){
            $con->close();
            return true;
        }else{
            $con->close();
            return false;
        }
    }

    function cadastro($usuario,$senha,$saldo){
        $servername = "localhost";
        $database = "banco";
        $username = "root";
        $password = "root";

        $con = mysqli_connect($servername,$username,$password,$database);
        if(empty($con)){
            die("Conexão falhou :( : " . mysqli_connect_error());
        }

        $sql = "INSERT INTO usuarios (usuario, senha, saldo) VALUES ('$usuario','$senha','$saldo')";

        if($con->query($sql) == TRUE && $usuario != null && $senha != null && $saldo != null){
            $result = $con->query("SELECT `idUsuario`,`usuario`,`saldo` FROM `usuarios` WHERE usuario='$usuario' AND senha='$senha'");
            $aux_query = $result->fetch_assoc();
            $_SESSION['id'] = $aux_query['idUsuario'];
            $_SESSION['usuario'] = $aux_query['usuario'];
            $_SESSION['saldo'] = $aux_query['saldo'];
            $con->close();
            return true;
        }else{
            $con->close();
            return false;
        } 
    }

    function excluir($id,$usuario,$senha){
        $servername = "localhost";
        $database = "banco";
        $username = "root";
        $password = "root";

        $con = mysqli_connect($servername,$username,$password,$database);
        if(empty($con)){
            die("Conexão falhou :( : " . mysqli_connect_error());
        }

        $sql = "DELETE FROM `usuarios` WHERE `idUsuario`= $id AND `usuario`= '$usuario' AND `senha`= '$senha'";

        if ($con->query($sql) === TRUE) {
            $con->close();
            return true;
        } else {
            $con->close();
            return true;
        }
    }

    function dados_menu($id){
        $servername = "localhost";
        $database = "banco";
        $username = "root";
        $password = "root";

        $con = mysqli_connect($servername,$username,$password,$database);
        if(empty($con)){
            die("Conexão falhou :( : " . mysqli_connect_error());
        }

        $result = $con->query("SELECT * FROM `usuarios` WHERE `id`=$id");
        $aux_query = $result->fetch_assoc();
        return $aux_query;
    }


    function depositar($id,$valor){
        $servername = "localhost";
        $database = "banco";
        $username = "root";
        $password = "root";
        $deposito = "Deposito";
        $_SESSION['valor'] = $valor;

        $con = mysqli_connect($servername,$username,$password,$database);
        if(empty($con)){
            die("Conexão falhou :( : " . mysqli_connect_error());
        }

        $sql = "UPDATE `usuarios` SET `saldo`='$valor' WHERE `idUsuario`= '$id';";
        $sql .="INSERT INTO `extrato`(`idUsuario`,`valor`,`acao`) VALUES ('$id','$valor','$deposito')";

        if ($con->multi_query($sql) === TRUE) {
            $con->close();
            return true;
        } else {
            $con->close();
            return true;
        }
    }

    function sacar($id,$valor){
        $servername = "localhost";
        $database = "banco";
        $username = "root";
        $password = "root";
        $saque = "Saque";
        $_SESSION['valor'] = $valor;

        $con = mysqli_connect($servername,$username,$password,$database);
        if(empty($con)){
            die("Conexão falhou :( : " . mysqli_connect_error());
        }

        $sql = "UPDATE `usuarios` SET `saldo`='$valor' WHERE `idUsuario`= '$id';";
        $sql .="INSERT INTO `extrato`(`idUsuario`,`valor`,`acao`) VALUES ('$id','$valor','$saque')";

        if ($con->multi_query($sql) === TRUE) {
            $con->close();
            return true;
        } else {
            $con->close();
            return true;
        }
    }

    function extrato($id){
        $servername = "localhost";
        $database = "banco";
        $username = "root";
        $password = "root";

        $x=0;
        $extrato;
        $con = mysqli_connect($servername,$username,$password,$database);
        if(empty($con)){
            die("Conexão falhou :( : " . mysqli_connect_error());
        }
        $result = $con->query("SELECT * FROM `extrato` WHERE `idUsuario` = '$id'");
            while($aux_query = $result->fetch_assoc()){
                $extrato[$x][0] = $aux_query['idUsuario'];
                $extrato[$x][1] = $aux_query['Valor'];
                $extrato[$x][2] = $aux_query['Acao'];
                $x++;
            }
        return $extrato;
    }
}

