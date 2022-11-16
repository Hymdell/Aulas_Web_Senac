<?php

class Conexao{

    function RegistraPaciente($nome){
        $servername = "localhost";
        $database = "clinica";
        $username = "root";
        $password = "root";

        $con = mysqli_connect($servername,$username,$password,$database);
        if(empty($con)){
            die("Conexão falhou :( : " . mysqli_connect_error());
        }

        $sql = "INSERT INTO `pacientes` (`Nome`) VALUES ('$nome')";

        if($con->query($sql) == TRUE && $nome != null){
            $con->close();
            return true;
        }else{
            $con->close();
            return false;
        } 
    }

    function RegistraMedico($crm, $nome){
        $servername = "localhost";
        $database = "clinica";
        $username = "root";
        $password = "root";

        $con = mysqli_connect($servername,$username,$password,$database);
        if(empty($con)){
            die("Conexão falhou :( : " . mysqli_connect_error());
        }

        $sql = "INSERT INTO `medicos` (`CRM`,`Nome`) VALUES ('$crm','$nome')";

        if($con->query($sql) == TRUE && $crm != null && $nome != null){
            $con->close();
            return true;
        }else{
            $con->close();
            return false;
        } 
    }

    function RegistraConsulta($idPaciente, $crm, $nomePaciente, $nomeMedico, $motivo, $data){
        $servername = "localhost";
        $database = "clinica";
        $username = "root";
        $password = "root";

        $con = mysqli_connect($servername,$username,$password,$database);
        if(empty($con)){
            die("Conexão falhou :( : " . mysqli_connect_error());
        }

        $sql = "INSERT INTO `atendimentos`(`IdPaciente`, `CRM`, `NomePaciente`, `NomeMedico`, `Motivo`, `Data`) VALUES ('$idPaciente','$crm','$nomePaciente','$nomeMedico','$motivo','$data')";

        if($con->query($sql) == TRUE && $idPaciente != null && $crm != null && $nomePaciente != null && $nomeMedico != null && $motivo != null && $data != null){
            $con->close();
            return true;
        }else{
            $con->close();
            return false;
        } 
    }

    function VerConsultas($crm){
        $servername = "localhost";
        $database = "clinica";
        $username = "root";
        $password = "root";

        $x=0;
        $consultas = array();

        $con = mysqli_connect($servername,$username,$password,$database);
        if(empty($con)){
            die("Conexão falhou :( : " . mysqli_connect_error());
        }
            $result = $con->query("SELECT * FROM `atendimentos` WHERE `CRM`='$crm';");
            while($aux_query = $result->fetch_assoc()){
                $consultas[$x][0] = $aux_query['IdAtendimento'];
                $consultas[$x][1] = $aux_query['IdPaciente'];
                $consultas[$x][2] = $aux_query['CRM'];
                $consultas[$x][3] = $aux_query['NomePaciente'];
                $consultas[$x][4] = $aux_query['NomeMedico'];
                $consultas[$x][5] = $aux_query['Motivo'];
                $consultas[$x][6] = $aux_query['Data'];
                $x++;
            }
        return $consultas;
    }
}