$("#btn_sesion").click(function(a) {
  a.preventDefault();
  login();
});

function login() {
  var dataString = {
    'correo': $('#correo').val(),
    'pass': $('#contrasenia').val()
  };

  $.ajax({
    async: true,
    url: "CInicio/login",
    type: "POST",
    dataType: "json",
    data: dataString,
    success: function(json) {
      if (json.status == "500") {
        alert("Algo fallo");
      } else if (json.status == "200") {
        alert("funciono");
      }
    },
    error: function(request, status, error) {
      alert("No funciona");
    }
  });
}