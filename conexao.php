<?php 
    $dbHost = 'Localhost';
    $username = 'root';
    $password = "";
    $database = "cadastrofilmes";

    $conn = mysqli_connect($dbHost, $username, $password, $database);

    if ($conn ->connect_errno ) 
    {  echo"Erro"} 

    else{
    echo "Conexão efetuada com sucesso"
}





?>