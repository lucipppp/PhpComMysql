<?php include("cabecalho.php"); ?>
<?php include("bd.php"); ?>
<?php include("produto_bd.php"); ?>
<table class="table">
<?php

$produtos = listar_produtos($conexao);
foreach($produtos as $produto){
?>
<tr>
  <td><?= $produto['NOME']?></td>
  <td><?= $produto ['Preco']?></td>
  <td><a href="remove_produto.php?id=<?= $produto['ID']?>"class="text-danger" >Remover</a></td>
</tr>
<?php
}
?>
</table>
<?php include("rodape.php"); ?>
