<?php 

	class Pessoa {

		public $nome; //Atributo

		public function falar() { //Método
			return "O meu nome é " . $this->nome;
		}
	}

	$pessoa = new Pessoa();
	$pessoa->nome = "Vinicius";
	echo $pessoa->falar();
 ?>