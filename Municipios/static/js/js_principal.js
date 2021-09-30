/*$('a').click(function(a) {
	var id = $(this).attr("id");
	if (id == "subir_muni") {
		$.ajax({
			async: true,
			url: "C_smunicipios/index",
			type: "POST",
			success: function() {
				swal("Cargando nueva sección");
			},
			error: function(request, status, error) {
				alert("Algo salió mal");
			}
		});
	}
});*/