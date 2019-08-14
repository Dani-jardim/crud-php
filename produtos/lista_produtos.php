<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <script type = 'text/javascript' src="js/apagar.js"> </script>
  <title>Lista de produtos</title>
</head>      
<body>
  <table width="100%" border="1" bordercolor="#EEE" cellspacing="0" cellpadding="10">
    <tr>
      <td>Titulo:</td>
      <td>Disciplina:</td>
      <td>Valor:</td>
      <td>Data Registro:</td>
    </tr>
    <?php 
      include("bd/conecta.php");
      $seleciona = $conexao->prepare("select * from produtos order by id desc");
      $seleciona -> execute();
      $resultados = $seleciona -> setFetchMode(PDO::FETCH_ASSOC);
      $resultados = $seleciona ->fetchAll();
      foreach ($resultados as $produtos) {
    ?>
    <tr>
      <td><?=$produtos["titulo"]?></td>
      <td><?=$produtos["disciplina"]?></td>
      <td><?=$produtos["valor"]?></td>
      <td><?=$produtos["data_registro"]?></td>

      <td><a href="editar_produtos.php?editaidproduto=<?=$produtos['id']?>">Editar</a></td>
      <td><a href="#" onClick="verifica(<?=$produtos['id']?>)">Excluir</a></td>
    </tr>
    <?php }?>
  </table>
  
</body>
</html>