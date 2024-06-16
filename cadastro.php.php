<?php
    require("conexao.php");

    $Título = $_POST['titulo'];
    $Diretor =  $_POST['diretor'];
    $genero = $_POST['genero'];
    $ano = $_POST['ano'];
    $avaliacao = $_POST['avaliacao'];

    $sql = "INSERT INTO filmes_assistidos (titulo, diretor, genero, ano, avaliacao)
    VALUES ('$titulo, '$diretor', '$genero', '$ano', '$avaliacao)";

    if ($conn->query($sql) === TRUE) {
      echo "<center><h1>Registro Inserido com Sucesso</h1>";
      echo "<a href='index.html'><input type='button' value='Voltar'></a></center>";
    } else {
      echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
?>