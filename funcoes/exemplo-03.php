<?php 

	
	function ola($texto = "mundo!") {
		return "Ola, " . $texto;
	}

	$texto = ola("Vinicius");
	$texto2 = ola();
	echo $texto;
	echo "<br>";
	echo $texto2;
 ?>