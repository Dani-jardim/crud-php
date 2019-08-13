<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dani- PHP</title>
</head>
<body>
  <h1>Cadastrar Podutos</h1>
  <?php
  include ("conecta.php"); 
  $recid=$_GET[editarid];

  $seleciona = $conexao->prepare("insert into usuarios (nome, cpf) values ('$recnome', '$reccpf')");
  $seleciona -> execute();
  $resultado = $seleciona -> setFetchMode(PDO::FETCH_ASSOC);
  $resultado = $seleciona ->fetchAll();
  
  ?>
  <form method="GET" action="gravaedita.php">
    <input type="text" name="form_nome" placeholder="insira seu nome completo"> 
    <input type="text" name="form_cpf" placeholder="insira seu CPF"> 
    <input type="submit" value="gravar">
  </form>
  
</body>
</html>