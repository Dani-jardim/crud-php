<?php

  include ("../banco/conecta.php");
  
  $recidcompras=$_POST["form_idcompras"];
  $rectitulo=$_POST["form_titulo"];
  $recdisciplina=$_POST["form_disciplina"];
  $recvalor=$_POST["form_valor"];
  $rec_dataregistro=$_POST["form_dataRegistro"];

  $seleciona = $conexao->prepare("update compras set produtos_id ='$recidproduto' where compras.id ='$recidcompras'");
  $seleciona -> execute();

  header ("location:lista_compras.php");

?>