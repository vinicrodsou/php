<?php 

	$frase = "A repetição é a mãe da retenção.";
	$palavra = "mãe";

	$q = strpos($frase, "mãe");

	echo $q;

	echo "<br>";

	$texto = substr($frase, 0, $q);

	var_dump($texto);

	echo "<br>";

	$texto = substr($frase, $q + strlen($palavra), strlen($frase));

	echo $texto;

?>