<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Editar Produtos</title>
</head>
<body>
  <h1>Editar Produtos</h1>
  <?php
    include ("../banco/conecta.php");
    
    $recidproduto=$_GET["editaidproduto"];
    $seleciona = $conexao->prepare("select * from produtos where id=$recidproduto");
    $seleciona -> execute();
    $resultados = $seleciona -> setFetchMode(PDO::FETCH_ASSOC);
    $resultados = $seleciona ->fetchAll();
      foreach ($resultados as $produtos) {
  ?> 
  <form method="post" action="gravaedita_produtos.php">
    <input type="hidden" name="form_idproduto" value="<?=$produtos['id']?>">
    <input type="text" name="form_titulo" placeholder="insira seu nome completo" value="<?=$produtos["titulo"]?>"> 
    <input type="text" name="form_disciplina" placeholder="inserir disciplina" value="<?=$produtos["disciplina"]?>"> 
    <input type="text" name="form_valor" placeholder="inserir valor" value="<?=$produtos["valor"]?>"> 
    <input type="text" name="form_dataRegistro" placeholder="data" value="<?=$produtos["data_registro"]?>"> 
    <input type="submit" value="gravar">
  </form>
   <?php }?>
</body>
</html>
