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

	echo json_encode($pessoas);
 ?>