<?php include("cabecalho.php"); ?>
<?php include("bd.php"); ?>
<?php include("Categoria_bd.php"); ?>
<?php

  $categoria = $_POST["Categoria"];
  $descricao = $_POST["Descricao"];

if(insereCategoria($conexao, $categoria, $descricao)){

  header ("Location: cadastro_categoria.php?Cadastrou=true&nome=($categoria)&Descricao=($descricao)");
  } else {
  header ("Location: cadastro_categoria.php?Cadastrou=false");
  }
  ?>
  <?php include("rodape.php"); ?>
