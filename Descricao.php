<?php include("cabecalho.php"); ?>
<?php include("bd.php"); ?>
<?php

function insereCategoria($conexao,$categoria, $descricao){
  $query = "insert into CATEGORIA (NOME, DESCRICAO) values ('{$categoria}', '{$descricao}')";
  $resultadoDoInsere = mysqli_query($conexao, $query);
  return $resultadoDoInsere;

}
  $categoria = $_POST["Categoria"];
  $descricao = $_POST["Descricao"];

if(insereCategoria($conexao, $categoria, $descricao)){

echo "<p class='alert-success'> A categoria $categoria, com a $descricao foi cadastrado(a)!";

} else {

  echo "<p class='alert-danger'> Ocorreu um problema na categoria.</p>";
  }
  ?>
  <?php include("rodape.php"); ?>
