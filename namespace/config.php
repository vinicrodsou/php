<?php 

spl_autoload_register(function($nomeClasse) {
	
	if(PHP_SHLIB_SUFFIX == 'so') {
		$nomeClasse = str_replace("\\", "/", $nomeClasse);
	}
	
	//echo $nomeClasse;
	$dirClass = "classes";
	$fileName = $dirClass . DIRECTORY_SEPARATOR . $nomeClasse . ".php";

	if(file_exists($fileName)) {
		require_once $fileName;
	}
});	
?>