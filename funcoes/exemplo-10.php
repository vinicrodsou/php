<?php 

	$fn = function($a) {
		$a .= ", Vinicius";
		var_dump($a);
		return $a;
	};

	$fn("Oi");
 ?>