<?php include("cabecalho.php");
  $nome = $_POST["nome"];
  $preco = $_POST["preco"];

$query = "insert into PRODUTO (NOME, PRECO) values ('{$nome}', {$preco})";

$conexao = mysqli_connect ('localhost','root', '', 'ecomerce');

if (mysqli_query($conexao, $query)){
  echo "<p class='alert-success'> O produto $nome, no valor $preco foi cadastrado!";

} else {

echo "<p class='alert-danger'> Ocorrei um problema ao cadastrar o produto.</p>";
}
?>
<?php include("rodape.php"); ?>
