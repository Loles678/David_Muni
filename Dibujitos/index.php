<HTML>
	<!--php
	require_once(color.php);
	?>-->
<HEAD>
	<TITLE>Práctica 2 - Objetos PHP</TITLE>
	<META charset="UTF-8">
	<LINK rel="stylesheet" href="../bootstrap5/css/bootstrap.min.css">
	<LINK rel="stylesheet" href="../fontawesome/css/all.min.css">

	<SCRIPT src="js/jquery-3.5.1.min.js"></SCRIPT>
	<SCRIPT src="bootstrap/js/bootstrap.min.js"></SCRIPT>

	<!-- NUEVO script para manipular eventos -->
	<SCRIPT src="js/practica2.js"></SCRIPT>
	
</HEAD>

<BODY>

<DIV class="container col col-md-12">
<H3>Práctica 2 - Objetos PHP</H3>

<DIV class="row">

	<DIV class="col col-md-2">
		<FORM id="form-cantidad">
		<DIV class="form-group" id="group-cantidad">
			<LABEL><STRONG>Cantidad de objetos:</STRONG></LABEL>
			<INPUT type="text" id="cantidad" class="form-control">
		</DIV>
		<BUTTON type="submit" 
			class="btn btn-success"><I
				class="fas fa-paper-plane fa-2x"></I> Enviar</BUTTON>
		</FORM>
	</DIV>

	<DIV class="col col-md-10">
		<DIV class="card" style="height: 550px !important;">
			<DIV class="card-header bg-secondary text-white"><STRONG>Resultado de la práctica</STRONG></DIV>
			<DIV class="card-body" id="resultado">Aquí se muestran los objetos...</DIV>
            <div style="background-color:<?php echo randomColor(); ?>; padding:3px; heigh:60px; width:200px;"><?php echo randomColor(); ?></div>
		</DIV>
	</DIV>

</DIV>

</DIV>

</BODY>


</HTML>
