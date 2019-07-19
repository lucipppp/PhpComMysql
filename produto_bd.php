<?php

  function listar_produtos($conexao){
  $produtos =array();
  $query = "SELECT * FROM produto";
  $resultado = mysqli_query($conexao, $query);
  while($produto = mysqli_fetch_assoc($resultado)){
     array_push($produtos, $produto);
   }
return $produtos;
     }

  function insereProduto($conexao,$nome, $preco){
     $query = "insert into PRODUTO (NOME, PRECO) values ('{$nome}', {$preco})";
     $resultadoDoInsere = mysqli_query($conexao, $query);
     return $resultadoDoInsere;
   }
function apagaProduto($conexao,$id){
  $query ="DELETE FROM produto where ID = {$id}";
  return mysqli_query($conexao, $query);
}

   ?>
