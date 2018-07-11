<?php  

	require_once 'config.php';

	use Cliente\Cadastro;

	$cadastro = new Cadastro();

	$cadastro->setNome("Vinicius");
	$cadastro->setEmail("teste@teste.com");
	$cadastro->setSenha("123456");

	echo $cadastro;
	echo "<br>";

	echo $cadastro->registrarVenda();
?>