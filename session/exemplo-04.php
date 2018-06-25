<?php 

	session_start();

	session_regenerate_id();

	echo session_id();

	echo "<br>";

	var_dump($_SESSION);
 ?>