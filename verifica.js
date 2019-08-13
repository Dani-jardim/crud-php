function verifica(recid) {
  if (confirm("Você realmente quer excluir?")) {
    window.location = "excluir.php?idexc=" + recid;
  }
}
