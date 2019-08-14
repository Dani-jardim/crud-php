<?php
include ("bd/conecta.php");

$recid=$_GET["idexc"];

  $seleciona = $conexao->prepare("delete from usuarios where id=$recid");
  $seleciona -> execute();
  $resultados = $seleciona -> setFetchMode(PDO::FETCH_ASSOC);
  $resultados = $seleciona ->fetchAll();

  header ("location:lista_produtos.php");

?>