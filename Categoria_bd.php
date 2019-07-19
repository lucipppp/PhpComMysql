<?php

  function listar_categoria($conexao){
  $categorias =array();
  $query = "SELECT * FROM categoria";
  $resultado = mysqli_query($conexao, $query);
  while($categoria = mysqli_fetch_assoc($resultado)){
     array_push($categorias, $categoria);
   }
return $categorias;
     }

  function insereCategoria($conexao,$nome, $descricao){
     $query = "insert into CATEGORIA (NOME, DESCRICAO) values ('{$nome}', {$descricao})";
     $resultadoDoInsere = mysqli_query($conexao, $query);
     return $resultadoDoInsere;
   }
  function apagaCategoria($conexao,$id){
    $query ="DELETE FROM categoria where ID = {$id}";
    return mysqli_query($conexao, $query);
  }

   ?>
