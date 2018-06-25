<?php 

	session_start();

	//session_unset(); //Apaga somente as variáveis

	//session_destroy(); //Destroi a sessão inteira

	echo $_SESSION['hcode'];
 ?>