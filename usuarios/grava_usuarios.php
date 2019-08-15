<?php
  include ("../banco/conecta.php");

  $recnome=$_GET["form_nome"];
  $reccpf=$_GET["form_cpf"];

  $seleciona = $conexao->prepare("insert into usuarios (nome, cpf) values ('$recnome', '$reccpf')");
  $seleciona -> execute();
  $resultados = $seleciona -> setFetchMode(PDO::FETCH_ASSOC);
  $resultados = $seleciona ->fetchAll();

  header ("location:lista_usuarios.php");

?>