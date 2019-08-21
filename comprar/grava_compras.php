<?php
  include ("../banco/conecta.php");

  $rectitulo=$_GET["form_titulo"];
  $recdisciplina=$_GET["form_disciplina"];

  $seleciona = $conexao->prepare("insert into produtos (id, titulo) values (' $id, $rectitulo)");
  $seleciona -> execute();
  $resultados = $seleciona -> setFetchMode(PDO::FETCH_ASSOC);
  $resultados = $seleciona ->fetchAll();

  header ("location:lista_compras.php");

?>