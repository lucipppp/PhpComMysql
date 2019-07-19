<?php include("cabecalho.php"); ?>

<?php
if(isset($_GET['removeu'])){
  $removeu = $_GET['removeu'];

  if($removeu){
  echo "<p class='text-success'>Produto removido!</p>";
  } else {
  echo "<p class='text-danger'>Ocorreu um erro ao remover o produto</p>";
  }
}
?>
<?php
if(isset($_GET['Cadastrou'])){
  $cadastrou = $_GET['Cadastrou'];
  $nomeCadastrado = $_GET['nome'];
  $precoCadastrado = $_GET['preco'];

  if($cadastrou){
     echo "<p class='alert-success'> O produto $nomeCadastrado, no valor $precoCadastrado foi cadastrado!</p>";

    } else {

      echo "<p class='alert-danger'> Ocorreu um problema ao cadastrar o produto.</p>";
      }
}

 ?>
            <form action="/salva_produto.php" method="post">
                <table class="table">
                  <tr>
                  <td>Nome: </td>
                  <td><input type="text" name="nome"/></td>
                </tr>
                <tr>
                  <td>Preço: </td>
                  <td><input type="number" name="preco"/><td>
                </tr>
                <tr>
                  <td><input class="btn-primary"type="submit" value="Cadastrar" /></d>
            </td>
          </table>
        </form>
<?php include("listar_produtos.php");?>
<?php include("rodape.php"); ?>
