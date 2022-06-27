function enviarDatos() {
	console.log(document.getElementById("nameProduct").value);
	console.log(document.getElementById("costProduct").value);
	console.log(document.getElementById("addLocation").value);
	console.log(document.getElementById("sizeColor").value);
	console.log(document.getElementById("onlyColor").value);
	console.log(document.getElementById("imageProduct").value);
	console.log(document.getElementById("textArea").value);
	console.log(document.getElementById("nameStore").value);
	console.log(document.getElementById("addLink").value);
	$.ajax({
		url: "./newproduct.php",
		type: "POST",
		data: {
			api: "crearNuevoproducto",
			nombre: document.getElementById("nameProduct").value,
			coste: document.getElementById("costProduct").value,
			localizacion: document.getElementById("addLocation").value,
			tallas: document.getElementById("sizeColor").value,
			color: document.getElementById("onlyColor").value,
			imagen: document.getElementById("imageProduct").value,
			textArea: document.getElementById("textArea").value,
			nameStore: document.getElementById("nameStore").value,
			addLink: document.getElementById("addLink").value,
		},
		//dataType: "json",
		success: function (data) {
			console.log(data);
			console.log(data.nombre);
			console.log(data.coste);
			console.log(data.localizacion);
			console.log(data.tallas);
			console.log(data.color);
			console.log(data.imagen);
			console.log(data.textArea);
			console.log(data.nameStore);
			console.log(data.addLink);
		},
		error: function (error) {
			console.log("ERROR: " + error);
		},
	});
}
