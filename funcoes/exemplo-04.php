<?php 

	function ola() {
		$argumentos = func_get_args();
		return $argumentos;
	}

	var_dump(ola("Texto",1,4.5,true,"Oi"));
 ?>