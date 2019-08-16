<?php
  include ("../banco/conecta.php");

  $recid=$_POST["fid"];
  $recnome=$_POST["form_nome"];
  $reccpf=$_POST["form_cpf"];

  $seleciona = $conexao->prepare("update usuarios set nome='$recnome', cpf='$reccpf' where id=$recid");
  $seleciona -> execute();
  

  header ("location:lista_usuarios.php");

?>