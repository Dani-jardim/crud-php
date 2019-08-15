<?php
include ("../banco/conecta.php");

  $recidproduto=$_GET["idexcp"];

  $seleciona = $conexao->prepare("delete from produtos where id=$recidproduto");
  $seleciona -> execute();
 

  header ("location:lista_produtos.php");

?>