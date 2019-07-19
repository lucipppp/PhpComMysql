<?php include("cabecalho.php"); ?>
<?php include("bd.php"); ?>
<?php include("Categoria_bd.php"); ?>
<table class="table">
<?php

$categorias = listar_categoria($conexao);
foreach($categorias as $categoria){
?>
<tr>
  <td><?= $categoria['Nome']?></td>
  <td><?= $categoria['Descricao']?></td>
<td><a href="remove_categoria.php?id=<?= $categoria['ID']?>"class="text-danger" >Remover</a></td>
</tr>
<?php
}
?>
</table>
<?php include("rodape.php"); ?>
