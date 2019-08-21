function verificausuarios(recid) {
  if (confirm("Você realmente quer excluir?")) {
      window.location = "../usuarios/excluir_usuarios.php?idexc=" + recid
  }
}

function verificaprodutos(recidproduto) {
  if (confirm("Você realmente quer excluir?")) {
    window.location = "../produtos/excluir_produtos.php?idexcp=" + recidproduto
  }
}

function verificacompras(recidcompras) {
  if (confirm("Você realmente quer excluir?")) {
    window.location = "../comprar/excluir_compras.php?idexcc=" + recidcompras
  }
}
