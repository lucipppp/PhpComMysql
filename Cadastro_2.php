<?php include("cabecalho.php"); ?>

<?php
if(isset($_GET['removeu'])){
  $removeu = $_GET['removeu'];

  if($removeu){
  echo "<p class='text-success'>Categoria removida!</p>";
  } else {
  echo "<p class='text-danger'>Ocorreu um erro ao remover a categoria</p>";
  }
}
?>
<?php
if(isset($_GET['Cadastrou'])){
  $cadastrou = $_GET['Cadastrou'];
  $nomeCadastrado = $_GET['nome'];
  $precoCadastrado = $_GET['descricao'];

  if($cadastrou){
     echo "<p class='alert-success'> O produto $nomeCadastrado, no valor $descricaoCadastrado foi cadastrado!</p>";

    } else {

      echo "<p class='alert-danger'> Ocorreu um problema ao cadastrar a categoria.</p>";
      }
}
?>
  <form action="/Salva_categoria.php" method="post">
      <table class="table">
            <tr>
              <td>Nome: </td>
                  <td><input type="text" name="Categoria"/></td>
                </tr>
                <tr>
                  <td>Descricao: </td>
                  <td><input type="text" name="Descricao"/><td>
                </tr>
                <tr>
                <td><input class="btn-primary"type="submit" value="Cadastrar" /></td>
            </td>
          </table>
        </form>
    <?php include("listar_categoria.php");?>
    <?php include("rodape.php"); ?>
