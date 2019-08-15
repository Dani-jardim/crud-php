<?php

  include ("../banco/conecta.php");
  
  $recidproduto=$_POST["form_idproduto"];
 
  $rectitulo=$_POST["form_titulo"];
  $recdisciplina=$_POST["form_disciplina"];
  $recvalor=$_POST["form_valor"];
  $rec_dataregistro=$_POST["form_dataRegistro"];

  $seleciona = $conexao->prepare("update produtos set titulo='$rectitulo', disciplina='$recdisciplina', valor='$recvalor', data_registro='$rec_dataregistro' where id=$recidproduto");
  $seleciona -> execute();

  header ("location:lista_produtos.php");

?>