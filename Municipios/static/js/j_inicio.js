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
					location.reload();
				}, 4000);
			}
		},
		error: function(request, status, error) {
			alert("Algo salió mal");
		}
	});
});

$('#registrarse').click(function() {
	$('#modal_correo').modal({
		show: true
	});
	$('#modal_correo').modal('show');
	$('#modal_correo').modal('toggle');
});
//$('#myModal').modal('toggle');
/*$('#modal_correo').modal({
	show: true
});*/
//$('#myModal').modal('hide')