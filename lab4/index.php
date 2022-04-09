<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laboratorio 4</title>
	<link rel="stylesheet" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
    <style>
    	@import url('https://fonts.googleapis.com/css2?family=VT323&display=swap');
    </style>
    <div class="container">
    	<div class="text">
    		<h1>Laboratorio 4</h1>
    	</div>
    	<div class="image">
    		<img src="img/lab.png" height="200px">
    	</div>
    </div>
</head>
<body>
	<div class="col-sm">
	<form method="get">
		<form>
		<label for="usuario">Nombre de usuario</label><br>
		<input type="text" class="form-control" name="usuario" id="usuario"
		placeholder="Ingrese el nombre de su usuario">
		</form>
		<br>
		<form>
		<label for="email">Correo</label><br>
		<input type="email" class="form-control" name="email" id="email"
		placeholder="Ingrese su correo">
	    </form>
		<br>
		<br>
		<form>
		<input type="submit" class="btn btn-secondary" name="enviar"
		value="Enviar">
		<input type="reset" class="btn btn-secondary" name="enviar"
		value="Cancelar">
		</form>
    </form>
    </div>
    <div class="col-sm">
    	<br>
    	<?php 
    	$nombre = $_GET["nombre"];
    	$correo = $_GET["correo"];
    	$num1 = $_GET["numero1"];
    	$num2 = $_GET["numero2"];
    	$num3 = $_GET["numero3"];
    	$num4 = $_GET["numero4"];
    	$numf = $_GET["numerof"];
    	$nums = $_GET["numeros"];
    	$numt = $_GET["numerot"];
    	echo "<h4>Bienvenido ".$nombre.", su correo es: ".$correo."</h4>";
    	if ($num1 > $num2) {
    		echo "<h4>Suma: ".$num1 + $num2.", Resta: ".$num1 - $num2."</h4>";
    	}
    	if ($num1 < $num2) {
    		echo "<h4>Multiplicación: ".$num2 * $num1.", División: ".$num2 / $num1."</h4>";
    	}
    	echo "<h4>Suma: ".$num1 + $num2.", Multiplicación: ".$num3 * $num4."</h4>";

    	if ( $numf > $nums && $numf > $numt) {
    		echo "<h4>El mayor número es: ".$numf."</h4>";
    	}
    	if ( $nums > $numf  && $nums > $numt) {
    		echo "<h4>El mayor número es: ".$nums."</h4>";
    	}
    	if ( $numt > $numf  && $numt > $nums) {
    		echo "<h4>El mayor número es: ".$numt."</h4>";
    	}
    	?>
    	<a href="?numerof=237&numeros=934&numerot=843">Click (Mayor Número)</a>
    	<br>
    	<a href="?numero1=21&numero2=34">Click (Mayor y Menor)</a>
    	<br>
    	<a href="?numero1=10&numero2=5&numero3=4&numero4=3">Click (Suma y Resta)</a>
    	<br>
        <a href="?nombre=Andy&correo=andyrojas@gmail.com">Click (Nombre y Correo)</a>

    </div>
</body>