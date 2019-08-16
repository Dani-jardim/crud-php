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
      <td>Nome:</td>
      <td>CPF:</td>
      <td>Alterar</td>
      <td>Excluir</td>
    </tr>
    <?php 
      include("../banco/conecta.php");
      $seleciona = $conexao->prepare("SELECT * FROM `compras` INNER JOIN produtos on produto_id = produtos.id INNER JOIN usuarios on usuario_id = usuarios.id");
      $seleciona -> execute();
      $resultados = $seleciona -> setFetchMode(PDO::FETCH_ASSOC);
      $resultados = $seleciona ->fetchAll();
      foreach ($resultados as $usuario) {
    ?>
    <tr>
      <td><?=$usuario["nome"]?></td>
      <td><?=$usuario["cpf"]?></td>
      <td><a href="editar_usuarios.php?editaid=<?=$usuario['id']?>">Editar</a></td>
      <td><a href="#" onclick="verificausuarios(<?=$usuario['id']?>)">Excluir</a></td>
    </tr>
    <?php }?>
  </table>
  
</body>
</html>