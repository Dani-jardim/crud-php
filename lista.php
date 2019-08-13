<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script type = 'text/javascript' scr="apagar.js"> </script>
  <title>Lista de produtos</title>
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
      include("conecta.php");
      $seleciona = $conexao->prepare("select * from usuarios order by id desc");
      $seleciona -> execute();
      $resultado = $seleciona -> setFetchMode(PDO::FETCH_ASSOC);
      $resultado = $seleciona ->fetchAll();
      foreach ($resultado as $usuario) {
    ?>
    <tr>
      <td><?=$usuario["nome"]?></td>
      <td><?=$usuario["cpf"]?></td>
      <td><a href="#" onClick="verifica(<?=$resultado["id"]?>)">Excluir</a></td>
      <td><a href="editar.php?editaid=<?=$resultado["id"]?>">Editar</a></td>


    </tr>
    <?php }?>
  </table>
  
</body>
</html>