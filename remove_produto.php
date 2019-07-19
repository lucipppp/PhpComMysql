<?php include("cabecalho.php"); ?>
<?php include("bd.php"); ?>
<?php include("produto_bd.php"); ?>

<?php

$id = $_GET["id"];



if(apagaProduto($conexao,$id)){
  header("Location: Cadastro_produto.php?removeu=true");
  }else{
  header("Location: Cadastro_2_produto.php?removeu=false");
}


 ?>
<?php include("rodape.php"); ?>
