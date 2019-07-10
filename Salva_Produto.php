<?php include("cabecalho.php");
  $nome = $_POST["nome"];
  $preco = $_POST["preco"];

$query = "insert into PRODUTO (NOME, PRECO) values ('{$nome}', {$preco})";

$conexao = mysqli_connect ('localhost','root', '', 'ecomerce');

mysqli_query($conexao, $query);

echo "<p class='alert-success'> O produto $nome, no valor $preco foi cadastrado!";

include("rodape.php"); ?>
