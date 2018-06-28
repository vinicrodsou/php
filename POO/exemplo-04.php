<?php

class Endereco {

	private $logradouro;
	private $cidade;
	private $numero;

	public function __construct($logradouro, $numero, $cidade) {
		$this->logradouro = $logradouro;
		$this->numero     = $numero;
		$this->cidade     = $cidade;
	}

	public function __destruct() {
		//echo "Destruir!";
	}

	public function __toString() {
		return $this->logradouro.", ".$this->numero.", ".$this->cidade;
	}
}

$endereco = new Endereco("Rua Isidro Borges", "580", "Seropédica");
var_dump($endereco);
echo "<br>";
echo $endereco;

?>