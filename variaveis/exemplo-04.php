<?php 
	
	$nome = $_GET["a"];
	$sobrenome = $_GET["b"];

	var_dump($nome);
	var_dump($sobrenome);

	$ip = $_SERVER["SCRIPT_NAME"];
	echo $ip;


?>