function enviarDatos() {
	$.ajax({
		url: "./newproduct.php",
		type: "POST",
		data: {
			api: "crearNuevoproducto",
			nombre: document.getElementById("nameProduct").value,
			coste: document.getElementById("costProduct").value,
			localizacion: document.getElementById("locationLink").value,
			tallas: document.getElementById("sizeColor").value,
			color: document.getElementById("onlyColor").value,
			imagen: document.getElementById("imageProduct").value,
			textArea: document.getElementById("textArea").value,
		},
		dataType: "json",
		success: function (data) {
			if (data == 0) {
				console.log("error");
			} else {
				console.log(data);
				console.log(data.nombre);
				console.log(data.coste);
				console.log(data.localizacion);
				console.log(data.tallas);
				console.log(data.color);
				console.log(data.imagen);
				console.log(data.textArea);
			}
		},
		error: function (error) {
			console.log("ERROR: " + error);
		},
	});
}
