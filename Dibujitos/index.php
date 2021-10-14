<?php
require("Circulo.php");
require('Color.php');

$icon = array("fas fa-ambulance",
	"fab fa-android",
	"fab fa-angellist",
	"fas fa-bath",
	"fas fa-bed",
	"fas fa-biohazard",
	"fas fa-bomb",
	"fas fa-bone",
	"fas fa-bong",
	"fas fa-book-dead",
	"fas fa-book-open",
	"fas fa-broom");

if (isset($_POST['value'])==null) {

}else{
	$cant = $_POST['value'];

	for($i=0;$i<$cant;$i++){
		$color = new Color();
		$arreglo[$i] = new Circulo
		(random_int(25, 300),
			random_int(0, 1100),
			random_int(49, 559),
			$icon[random_int(0,11)],
			$color);
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Practica 2</title>
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<script src="https://kit.fontawesome.com/6f6eafc8d3.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>


	<div class="container col-md-12">

		<div class="row">

			<div class="col-md-2">
			</div>
			<div class="jumbotron col-md-8">
				<div class=" col-md-8" style="align-content: flex-start;">
					<br/>

					<label>
						<h3>
							¿Cuántos circulos deseas ingresar?
						</h3>
					</label>
					<form method="post" action="">
						<input style="height: 50px; width: 250px; text-align: center;" type="text" name="value" id="<?php $cant?>">

						<input type="submit" class="btn btn-info" style="margin-left: 55px;">
					</form>
				</div>
			</div>
		</div>

		<div>
			<br/>
			<br/>
		</div>
		<div class= "row">
			<div class="col-md-2">
			</div>
			<div class="col-md-8">
				<div class="card" style="height: 900px; width: 1300px; display: flex; position: ;">
					<div class="card-header bg-success text-white">
						<H4>
							Dibujos
						</H4>
					</div>
					<div class="card-body">

						<?php
						if (isset($cant)) {
							foreach ($arreglo as $figura) {
								echo "
								<div>
								$figura
								</div>
								";
							}
						}

						?>

					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
