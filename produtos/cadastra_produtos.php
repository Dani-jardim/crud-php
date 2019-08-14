<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cadastrar Produtos</title>
</head>
<body>
  <h1>Cadastrar Produtos</h1>
  <form method="get" action="grava_produtos.php">
    <input type="text" name="form_titulo" placeholder="insira o titulo do livro"> 
    <input type="text" name="form_disciplina" placeholder="Qual da disciplina?"> 
    <input type="text" name="form_valor" placeholder="Qual o preço do livro?"> 
    <input type="date" name="form_dataRegistro" placeholder="Data"> 
    <input type="submit" value="gravar">
  </form>
</body>
</html>