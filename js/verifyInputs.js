inputs = document.querySelectorAll("input");

function verify() {
  let errorMessage = "Por favor preencha os seguintes campos:";
  let error = false;

  if (!inputs[0].value) {
    error = true;
    errorMessage += " [Titulo do livro]";
  }
  if (!inputs[1].value) {
    error = true;
    errorMessage += " [Editora do livro]";
  }
  if (!inputs[2].value) {
    error = true;
    errorMessage += " [Autor da obra]";
  }
  if (!inputs[3].value) {
    error = true;
    errorMessage += " [Quantidade disponivel]";
  }

  if (error) {
    alert(errorMessage);
    return false;
  }
  return true;
}
