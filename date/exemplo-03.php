<?php 

	//LC_ALL muda toda a configuração
	//                padrão       linux         windows
	setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese"); //No linux o padrão é diferente do Windows

	echo date("l, d/m/Y");

	echo "<br>";
	echo ucwords(strftime("%A, %d/%m/%Y"));
 ?>