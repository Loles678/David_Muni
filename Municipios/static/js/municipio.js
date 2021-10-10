$('#select_edo').change(function(a) {
	var str = "";
	var id = "";
	$("#select_edo option:selected").each(function() {
		str = $(this).text();
		id = $(this).attr('id');
	});
	//swal(str + "  " + id);
	if (id != 0) {
		llenar_municipios(id);
	}
}).trigger("change");

var base_url_temp = "http://localhost/David_Muni/Municipios/";

function llenar_municipios(id_edo) {
	var estados = "";
	$.ajax({
		async: true,
		url: base_url_temp + 'C_smunicipios/municipio',
		dataType: 'json',
		type: 'POST',
		data: {
			'id_edo': id_edo
		},
		success: function(json) {
			if (json.status == 200) {
				swal('Cargando municipios...');
				for (var i = 0; i <= Object.keys(json.municipios).length; i++) {
					if (i == 0) {
						estados += "<option id='0' selected>Selecciona municipio</option>";
					}
					estados += "<option id='" + i + "'>" + json.municipios[i].NOM_MPO + "</option>";
					$('#select_muni').html(estados);
				}
			}
		}
	});
}
$('#registro').click(function(b) {
	b.preventDefault();
	registrarse();
});

function registrarse() {
	var nom = $('#txt_nomb').val();
	var ap = $('#txt_apellidos').val();
	var email = $('#txt_email').val();
	var pass = $('#txt_pass').val();
	var id_edo = "";
	var id_muni = "";
	$("#select_edo option:selected").each(function() {
		id_edo = $(this).attr('id');
	});
	$("#select_muni option:selected").each(function() {
		id_muni = $(this).attr('id');
	});

	$.ajax({
		async: true,
		url: base_url_temp + 'C_sesion/registrarse',
		type: 'POST',
		dataType: 'json',
		data: {
			'nom': nom,
			'ap': ap,
			'email': email,
			'pass': pass,
			'id_edo': id_edo,
			'id_muni': id_muni
		},
		success: function(json) {
			if (json.status == 200) {
				swal(json.mensaje);
				setTimeout(function() {
					location.reload();
				}, 2000);
			} else if (json.status == 500)
				swal('Ocurrio un error al registrarse');

		}
	});
}