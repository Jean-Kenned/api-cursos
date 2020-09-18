function showname() {
	let name = document.getElementById("url");
	let textFileChosen = document.getElementById("filename");
	textFileChosen.innerHTML = "Imagem: " + name.files.item(0).name;
}
