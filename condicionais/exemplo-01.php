<?php 

	$suaIdade = 79;
	$idadeCrianca = 12;
	$idadeAdulto = 18;
	$idadeIdoso = 65;

	if($suaIdade <= $idadeCrianca) {
		echo "Criança";
	} else if($suaIdade > $idadeCrianca && $suaIdade < $idadeAdulto) {
		echo "Adolescente";
	} else if($suaIdade >= $idadeAdulto && $suaIdade < $idadeIdoso) {
		echo "Adulto";
	} else {
		echo "Idoso";
	}
?>