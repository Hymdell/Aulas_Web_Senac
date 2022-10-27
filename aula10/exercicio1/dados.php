<?php

$servername = "localhost";
$database = "cliente";
$username = "root";
$password = "root";

$con = mysqli_connect($servername,$username,$password,$database);

if(empty($con)){
    die("Conexão falhou :( : " . mysqli_connect_error());
}

echo "Conexão bem sucedida :) <br><br>";

$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$email=$_POST['email'];

$sql="INSERT INTO pessoa (nome, sobrenome, email) VALUES ('$nome','$sobrenome','$email')";

if(mysqli_query($con,$sql)){
    echo "Novos dados salvos com sucesso";
}else{
    echo "Error: " . $sql . "<br>" . mysqli_error($cnn);
}
?>

<table width="400px" border=1 cellspacing="0">
    <tr>
        <td><strong>Nome</strong></td>
        <td><strong>Sobrenome</strong></td>
        <td><strong>Email</strong></td>
    </tr>
    <?php
    $result = $con->query("SELECT * FROM `pessoa`");
    while($aux_query = $result->fetch_assoc()){
        echo "<tr>";
        echo " <td>" . $aux_query['nome'] . "</td>";
        echo " <td>" . $aux_query['sobrenome'] . "</td>";
        echo " <td>" . $aux_query['email'] . "</td>";
        echo "</tr>";
    }
    mysqli_close($con);
    ?>
</table>
