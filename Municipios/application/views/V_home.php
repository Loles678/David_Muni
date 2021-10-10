<!DOCTYPE html>
<html lang="es-ES">

<head>
	<title>Inicio</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>static/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>static/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>static/sweetalert/css/sweetalert.css">

	<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>-->

</head>

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
						<A id="registrarse" class="card-link text-white" data-toggle="modal" data-target="#modal_correo">Regístrese como nuevo usuario</A>
					</DIV>
				</DIV>
			</DIV>
		</DIV>

		<BR />

		<DIV class="row" id="mensaje-validacion"></DIV>
	</DIV>
	<!-- The Modal -->
	<div class="modal false" tabindex="-1" role="dialog" id="modal_correo">
		<div class="modal-dialog" role="dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Escribe sus datos</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="post">
					<div class="modal-body">
						<div class="row">
							<div class="form-group">
								<label>Nombre(s)</label>
								<input type="text" class="form-control" id="txt_nomb" placeholder="Escribe nombre(s)">
								<small id="nombre" class="form-text text-muted"></small>
							</div>
							<div class="form-group">
								<label>Apellidos</label>
								<input type="text" class="form-control" id="txt_apellidos" placeholder="Escribe tus apellidos">
								<small id="apellidos" class="form-text text-muted"></small>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<label>Email address</label>
								<input type="email" class="form-control" id="txt_email" placeholder="Enter email">
								<small id="email" class="form-text text-muted"></small>
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" class="form-control" id="txt_pass" placeholder="Password">
							</div>
						</div>
						<div class="row">
							<div class="form-row align-items-center">
								<div class="col-auto my-1">
									<label class="mr-sm-2">Estado</label>
									<select class="custom-select mr-sm-2" id="select_edo">
										<option id="0" selected>Selecciona estado</option>
										<?php
									foreach($estado as $edo):
											echo "<option id='".$edo->ID_EDO."'>".$edo->NOM_EDO."</option>";
										endforeach;
										?>
									</select>
								</div>
							</div>
							<div class="form-row align-items-center">
								<div class="col-auto my-1">
									<label class="mr-sm-2">Municipio</label>
									<select class="custom-select mr-sm-2" id="select_muni">
										<option id="0" selected>Selecciona municipio</option>
									</select>
								</div>

							</div>
						</div>



						<div class="modal-footer">
							<button type="submit" class="btn btn-primary" id="registro">Save changes</button>
						</div>
					</div>
			</div>
			</form>
		</div>
	</div>
	</div>
</BODY>
<script type="text/javascript" src="<?php echo base_url();?>static/js/j_inicio.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>static/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>static/sweetalert/js/sweetalert.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>static/js/municipio.js"></script>

</html>
