<?php 

	$pessoa = array(
		"nome" => "Vinicius",
		"idade" => 33
	);

	foreach($pessoa as &$value) {

		if(gettype($value) === 'integer') {
			$value += 10;
			echo $value . "<br>";
		}
	}

	print_r($pessoa);
 ?>