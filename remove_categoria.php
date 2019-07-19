<?php include("cabecalho.php"); ?>
<?php include("bd.php"); ?>
<?php include("Categoria_bd.php"); ?>

<?php

$id = $_GET["id"];



if(apagaCategoria($conexao,$id)){
  header("Location: Cadastro_2.php?removeu=true");
  }else{
  header("Location: Cadastro_2_produto.php?removeu=false");
}


 ?>
<?php include("rodape.php"); ?>
