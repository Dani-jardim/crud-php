<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dani- PHP</title>
</head>
<body>
  <h1>Editar Compras</h1>
  <?php
    include ("../banco/conecta.php"); 
    $recidcompras=$_GET["editaid"];
    $seleciona = $conexao->prepare("SELECT * FROM `compras` INNER JOIN produtos on produto_id = produtos.id INNER JOIN usuarios on usuario_id = usuarios.id where compras.id=$recidcompras");
    $seleciona -> execute();
    $resultados = $seleciona -> setFetchMode(PDO::FETCH_ASSOC);
    $resultados = $seleciona ->fetchAll();
      foreach ($resultados as $compras) {
  ?> 
   <form method="post" action="gravaedita_compras.php">
    <input type="hidden" name="form_idcompras" value="<?=$compras['id']?>">
    
    <?php
    $recidcompras=$_GET["editaid"];
    $seleciona = $conexao->prepare("SELECT produtos.titulo, produtos.id from produtos ");
    $seleciona -> execute();
    $resultadosCompras = $seleciona -> setFetchMode(PDO::FETCH_ASSOC);
    $resultadosCompras = $seleciona ->fetchAll();

      echo '<select>';
      foreach($resultadosCompras as $produtos ){
      echo '<option value='.$produtos["id"].'> '.$produtos["titulo"].' </option>';
      }
      echo '</select>';
    ?>

    <input type="text" name="form_disciplina" placeholder="insira a disciplina" value="<?=$compras["disciplina"]?>"> 
    <input type="submit" value="gravar">

   <?php }?> 
  </form>

</body>
</html>

