<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dani- PHP</title>
</head>
<body>
  <h1>Editar usuários</h1>
  <?php
    include ("../banco/conecta.php"); 
    
    $recid=$_GET["editaid"];
    $seleciona = $conexao->prepare("select * from usuarios where id=$recid");
    $seleciona -> execute();
    $resultados = $seleciona -> setFetchMode(PDO::FETCH_ASSOC);
    $resultados = $seleciona ->fetchAll();
      foreach ($resultados as $usuario) {
  ?> 
  <form method="post" action="gravaedita_usuarios.php">
    <input type="hidden" name="fid" value="<?=$usuario['id']?>">
    <input type="text" name="form_nome" placeholder="insira seu nome completo" value="<?=$usuario["nome"]?>"> 
    <input type="text" name="form_cpf" placeholder="insira seu CPF" value="<?=$usuario["cpf"]?>"> 
    <input type="submit" value="gravar">
  </form>
   <?php }?>
</body>
</html>