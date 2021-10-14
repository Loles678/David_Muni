<?php
class Circulo
{
	private $rad;
	private $x;
	private $y;
	private $icon;
	private $color;

	function __construct($rad, $x, $y,$icon,$color){
		$this->setrad($rad);
		$this->setX($x);
		$this->setY($y);
		$this->setIcon($icon);
		$this->setColor($color);
	}



	function setrad($rad){
		if(!is_numeric($rad)){
			throw new Exception("El valor del radio $rad no es numérico", 1);
		}
		else if ($rad <= 0) {
			throw new Exception("El valor del radio $rad no puede ser menor o igual a cero", 2);
		}
		$this->rad = $rad;
	}

	function getrad(){
		return $this->rad;
	}

	function setX($x){
		$this->x = $x;
	}

	function getX(){
		return $this->x;
	}

	function setY($y){
		$this->y = $y;
	}

	function getY(){
		return $this->y;
	}

	function setIcon($icon){
		$this->icon = $icon;
	}

	function getIcon(){
		return $this->icon;
	}

	function setColor($color){
		return $this->color = $color;
	}

	function getColor(){
		return $this->color;
	}


	function __toString(){
		$radTexto = $this->rad."px";
		$xtxt = $this->x."px";
		$ytxt = $this->y."px";
		$icontxt = $this->icon;
		$colortxt = $this->color;
		return "
		<div style='
		left: $xtxt;
		top: $ytxt;
		width: $radTexto;
		height: $radTexto;
		border-style: solid;
		border-color: black;
		background-color: $colortxt;
		border-radius: 50%;
		display: flex;
		color:red;
		position: absolute;'>
		<i style='margin: auto;' class='$icontxt'></i>
		</div>
		";
	}

}
?>
