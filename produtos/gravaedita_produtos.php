<?php
  include ("bd/conecta.php");

  $recid=$_POST["fid"];
 
  $rectitulo=$_POST["form_titulo"];
  $recdisciplina=$_POST["form_disciplina"];
  $recvalor=$_POST["form_valor"];
  $rec_dataregistro=$_POST["form_dataRegistro"];

  $seleciona = $conexao->prepare("update produtos set titulo='$rectitulo', disciplina='$recdisciplina' valor='$recvalor', data='$rec_dataregistro' where id=$recid");
  $seleciona -> execute();
  $resultados = $seleciona -> setFetchMode(PDO::FETCH_ASSOC);
  $resultados = $seleciona ->fetchAll();

  header ("location:/lista_produtos.php");

?>