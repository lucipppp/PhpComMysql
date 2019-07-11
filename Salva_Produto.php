<?php include("cabecalho.php"); ?>
<?php include("bd.php"); ?>
<?php

  $nome = $_POST["nome"];
  $preco = $_POST["preco"];

$query = "insert into PRODUTO (NOME, PRECO) values ('{$nome}', {$preco})";

if (mysqli_query($conexao, $query)){

  echo "<p class='alert-success'> O produto $nome, no valor $preco foi cadastrado!";

} else {

echo "<p class='alert-danger'> Ocorrei um problema ao cadastrar o produto.</p>";
}
?>
<?php include("rodape.php"); ?>
