$('a').click(function(a) {
	var id = $(this).attr("id");
	if (id == 'cerrar_sesion') {
		$.ajax({
			async: true,
			url: 'C_sesion/cerrar_sesion',
			type: 'POST',
			dataType: 'json',
			success: function() {
				swal("GOOD BYE");
			}
		});
	}
});

$('#subir_muni').click(function(a) {

});