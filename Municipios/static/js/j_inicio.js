$("#btn_sesion").click(function(a) {
	a.preventDefault();
	var dataString = {
		'correo': $('#correo').val(),
		'pass': $('#contrasenia').val()
	};

	$.ajax({
		async: true,
		url: "C_sesion/login",
		type: "POST",
		dataType: "json",
		data: dataString,
		success: function(json) {
			if (json.status == "500") {
				swal(json.mensaj);
			} else if (json.status == "200") {
				swal(json.mensaj);
				setTimeout(function() {
					location.href = "C_principal/index";
				}, 4000);
			}
		},
		error: function(request, status, error) {
			alert("Algo salió mal");
		}
	});
});