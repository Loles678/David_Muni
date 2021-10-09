
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
</head>
<body>
  <form>
  <div class="form-group">
    <label>Nombre(s)</label>
    <input type="text" class="form-control" id="txt_nomb"  placeholder="Escribe nombre(s)">
    <small id="nombre" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label>Apellidos</label>
    <input type="text" class="form-control" id="txt_apellidos"  placeholder="Escribe tus apellidos">
    <small id="apellidos" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control" id="txt_email"  placeholder="Enter email">
    <small id="email" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" id="txt_pass" placeholder="Password">
  </div>
  <div class="form-row align-items-center">
    <div class="col-auto my-1">
      <label class="mr-sm-2" >Estado</label>
      <select class="custom-select mr-sm-2" id="select_muni">
        <option selected>Selecciona estado</option>
        <?php
        foreach($estado as $edo):
            echo "<option id='".$edo->ID_EDO."'>".$edo->NOM_EDO."</option>";
          endforeach;
          ?>
      </select>
    </div>
		<div class="form-row align-items-center">
	    <div class="col-auto my-1">
	      <label class="mr-sm-2" >Municipio</label>
	      <select class="custom-select mr-sm-2" id="select_muni">
	        <option selected>Selecciona municipio</option>
	      </select>
	    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<!--
  nombre(s)
  Apellidos
  correo
  Contraseña
  País
  Estado
  Municipio
    Enviar cancelar
-->


</body>
<script type="text/javascript" src="<?php echo base_url();?>static/sweetalert/js/sweetalert.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>static/js/municipio.js"></script>
