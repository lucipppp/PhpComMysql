<?php include("cabecalho.php"); ?>
<?php include("bd.php"); ?>
<?php

  $categoria = $_POST["Categoria"];
  $descricao = $_POST["Descricao"];

  $query = "insert into CATEGORIA (CATEGORIA, DESCRICAO) values ('{$categoria}', '{$descricao}')";

if (mysqli_query($conexao, $query)){

echo "<p class='alert-success'> A categoria $categoria, com a $descricao foi cadastrado(a)!";

} else {

  echo "<p class='alert-danger'> Ocorreu um problema na categoria.</p>";
  }
  ?>
  <?php include("rodape.php"); ?>
