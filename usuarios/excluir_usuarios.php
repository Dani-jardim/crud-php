<?php
include ("../banco/conecta.php");

  $recid=$_GET["idexc"];

  $seleciona = $conexao->prepare("delete from usuarios where id=$recid");
  $seleciona -> execute();


  header ("location:lista_usuarios.php");

?>