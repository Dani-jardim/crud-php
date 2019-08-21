<?php
include ("../banco/conecta.php");

  $recidcompras=$_GET["idexcc"];

  $seleciona = $conexao->prepare("delete from compras where id=$recidcompras");
  $seleciona -> execute();


  header ("location:lista_compras.php");

?>