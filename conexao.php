<?php

class Conexao {

	private $host = 'sql205.epizy.com';
	private $dbname = 'epiz_32763346_webteste';
	private $user = 'epiz_32763346';
	private $pass = 'ZXtVR2uHCX';

	public function conectar() {
		try {

			$conexao = new PDO(
				"mysql:host=$this->host;dbname=$this->dbname",
				"$this->user",
				"$this->pass"				
			);

			return $conexao;


		} catch (PDOException $e) {
			echo '<p>'.$e->getMessage().'</p>';
		}
	}
}

?>