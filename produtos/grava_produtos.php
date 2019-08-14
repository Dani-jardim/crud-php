<?php
  include ("bd/conecta.php");

  $rectitulo=$_GET["form_titulo"];
  $recdisciplina=$_GET["form_disciplina"];
  $recvalor=$_GET["form_valor"];
  $rec_dataregistro=$_GET["form_dataRegistro"];


  $seleciona = $conexao->prepare("insert into produtos (titulo, disciplina, valor, data_registro) values ('$rectitulo', '$recdisciplina', '$recvalor', '$rec_dataregistro')");
  $seleciona -> execute();
  $resultados = $seleciona -> setFetchMode(PDO::FETCH_ASSOC);
  $resultados = $seleciona ->fetchAll();

  header ("location:lista_produtos.php");

?>