<?php
include ("conecta.php");

$recid=$_GET["idexc"];

  $seleciona = $conexao->prepare("delete from usuarios where id=$recid");
  $seleciona -> execute();
  $resultado = $seleciona -> setFetchMode(PDO::FETCH_ASSOC);
  $resultado = $seleciona ->fetchAll();

  header ("location:lista.php");

?>