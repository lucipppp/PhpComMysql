<?php include("cabecalho.php"); ?>
<?php include("bd.php"); ?>
<?php include("produto_bd.php"); ?>

<?php

  $nome = $_POST["nome"];
  $preco = $_POST["preco"];

if(insereProduto($conexao, $nome, $preco)){
  header ("Location: cadastro_produto.php?Cadastrou=true&nome=($nome)&preco=($preco)");
} else {
  header ("Location: cadastro_produto.php?Cadastrou=false");
}
?>
<?php include("rodape.php"); ?>
