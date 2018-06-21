<?php 

	$pessoas = array();

	array_push($pessoas, array(
		"nome" => "Érica",
		"idade" => 37
	));

	array_push($pessoas, array(
		"nome" => "Vinicius",
		"idade" => 33
	));

	print_r($pessoas);

	print_r($pessoas[0]["nome"]);
 ?>