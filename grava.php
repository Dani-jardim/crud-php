<?php
  include ("conecta.php");

  $recnome=$_GET["form_nome"];
  $reccpf=$_GET["form_cpf"];

  $seleciona = $conexao->prepare("select * from usuarios where id=$recid");
  $seleciona -> execute();
  $resultado = $seleciona -> setFetchMode(PDO::FETCH_ASSOC);
  $resultado = $seleciona ->fetchAll();

  header ("location:lista.php");

?>