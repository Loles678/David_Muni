<!doctype HTML>
<HTML>
<HEAD>
	<TITLE>INICIO DE SESIÓN</TITLE>
	<META charset="UTF-8">
	<LINK rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
	<LINK rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css" />
</HEAD>
<BODY>
	<DIV class="container">
		<DIV class="row">
			<DIV class="col col-md-12">
				<H2>Bienvenido al sistema de municipio</H2>
			</DIV>
		</DIV>

		<DIV class="row">
			<DIV class="col col-md-8">
				<DIV class="card card-default">
					<DIV class="card-header bg-dark text-white"><STRONG>Inicio
							de sesión</STRONG>
					</DIV>

					<DIV class="card-body">

						<FORM action="inicio.php" method="post" id="form-login">

							<DIV class="form-group" id="group-correo">
								<LABEL><STRONG>Correo:</STRONG></LABEL>
								<INPUT type="text" class="form-control" name="correo" id="correo">
							</DIV>

							<DIV class="form-group" id="group-contrasenia">
								<LABEL><STRONG>Contraseña:</STRONG></LABEL>
								<INPUT type="password" class="form-control" name="contrasenia" id="contrasenia">
							</DIV>

							<BUTTON id="btn_sesion" type="submit" class="btn btn-success"><I class="fas fa-sign-in-alt"></I>
								Iniciar sesión</BUTTON>

						</FORM>


					</DIV>

					<DIV class="card-footer bg-secondary text-white">
						<A href="#" class="card-link text-white" data-toggle="modal" data-target="#modal-correo">Regístrese como nuevo usuario</A>
					</DIV>
				</DIV>
			</DIV>
		</DIV>

		<BR />

		<DIV class="row" id="mensaje-validacion">


		</DIV>
	</DIV>




	<!-- The Modal -->
	<div class="modal fade" id="modal-correo">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Escriba sus datos</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<form action="registro.php" method="post">
					<!-- Modal body -->
					<div class="modal-body">

						<div class="row">

							<DIV class="form-group col col-md-4">
								<LABEL><STRONG>Nombre:</STRONG></LABEL>
								<INPUT type="text" class="form-control" name="nombrenuevo" id="nombre-nuevo" />
							</DIV>
							<DIV class="form-group col col-md-8">
								<LABEL><STRONG>Apellidos:</STRONG></LABEL>
								<INPUT type="text" class="form-control" name="apellidosnuevo" id="apellidos-nuevo" />
							</DIV>
						</div>

						<div class="row">
							<DIV class="form-group col col-md-8">
								<LABEL><STRONG>Correo:</STRONG></LABEL>
								<INPUT type="text" class="form-control" name="correonuevo" id="correo-nuevo" />
							</DIV>
							<DIV class="form-group col col-md-4">
								<LABEL><STRONG>Contraseña:</STRONG></LABEL>
								<INPUT type="password" class="form-control" name="contrasenianuevo" id="contrasenia-nuevo" />
							</DIV>
						</div>

					</div>

					<!-- Modal footer -->
					<div class="modal-footer">
						<button type="submit" class="btn btn-secondary" id="enviar-correo-nuevo"><I class="fas fa-paper-plane fa-2x"></I> Enviar</button>
					</div>

				</form>

			</div>
		</div>
	</div>

</BODY>
<SCRIPT src="js/jquery-3.5.1.min.js"></SCRIPT>
<SCRIPT src="bootstrap/js/bootstrap.min.js"></SCRIPT>
<SCRIPT src="js/login.js"></SCRIPT>
</HTML>
