<?php include("cabecalho.php");

  $Categoria = $_POST["Categoria"];
  $Descricao = $_POST["Descricao"];

  $query = "insert into CATEGORIA (CATEGORIA, DESCRICAO) values ('{$categoria}', '{$descricao}')";

  $conexao = mysqli_connect ('localhost','root', '', 'ecomerce');

  mysqli_query($conexao, $query);

echo "<p class='alert-success'> O produto $Categoria, $Descricao foi cadastrado(a)!";

include("rodape.php"); ?>
