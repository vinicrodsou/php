<?php 

	$json = '[{"nome":"\u00c9rica","idade":37},{"nome":"Vinicius","idade":33}]';

	$data = json_decode($json, true); //Se não colocar como o segundo parâmetro como true ele trata como objeto

	print_r($data);
 ?>