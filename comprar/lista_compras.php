<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script type = 'text/javascript' src="../js/apagar.js"> </script>
  <title>Lista de Compras </title>
</head>      
<body>
  <table width="100%" border="1" bordercolor="#EEE" cellspacing="0" cellpadding="10">
    <tr>
      <td>Cliente</td>
      <td>Livro</td>
      <td>Disciplina</td>
      <td>Valor</td>
      <td>Editar</td>
      <td>Excluir</td>
    </tr>
    <?php 
      include("../banco/conecta.php");
      $seleciona = $conexao -> prepare ("SELECT nome, titulo, disciplina, valor, compras.id  FROM  `compras` INNER JOIN produtos on produto_id = produtos.id INNER JOIN usuarios on usuario_id = usuarios.id");
      $seleciona -> execute();
      $resultados = $seleciona -> setFetchMode(PDO::FETCH_ASSOC);
      $resultados = $seleciona ->fetchAll();
      foreach ($resultados as $compras) {
    ?>
    <tr>  
      <td><?=$compras["nome"]?></td>
      <td><?=$compras["titulo"]?></td>
      <td><?=$compras["disciplina"]?></td>
      <td><?=$compras["valor"]?></td>
      <td><a href="editar_compras.php?editaid=<?=$compras['id']?>">Editar</a></td>
      <td><a href="#" onClick="verificacompras(<?=$compras['id']?>)">Excluir</a></td>
    </tr>
    <?php }?>
  </table>
  
</body>
</html>