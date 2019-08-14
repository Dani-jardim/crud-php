<?php
  include ("conecta.php");

  $recid=$_POST["fid"];
  $recnome=$_POST["form_nome"];
  $reccpf=$_POST["form_cpf"];

  $seleciona = $conexao->prepare("update usuarios set nome='$recnome', cpf='$reccpf' where id=$recid");
  $seleciona -> execute();
  $resultados = $seleciona -> setFetchMode(PDO::FETCH_ASSOC);
  $resultados = $seleciona ->fetchAll();

  header ("location:lista.php");

?>