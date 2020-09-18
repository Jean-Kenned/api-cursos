function showAlert() {
	let alert = document.getElementById("alertFileChosen");
	alert.classList.remove("d-none");

	let name = document.getElementById("url");
	let textFileChosen = document.getElementById("filename");
	textFileChosen.innerHTML = "Imagem: " + name.files.item(0).name;

	let imageCurso = document.getElementById("imagemCurso");
	imageCurso.classList.add("d-none");
}
