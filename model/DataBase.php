<?php

class DataBase{
	private $server;
	private $banco;
	private $user;
	private $senha;

	private $erro;

	function __construct($se, $u, $s,$b){  
		$this->banco = $b;
		$this->user = $u;
		$this->senha = $s;
		$this->server = $se;
		
		$obj = new mysqli("$this->server", "$this->user", "$this->senha", "$this->banco");

		
		if ($obj->connect_errno) {
		    $this->erro = "Failed to connect to MySQL: " . $obj->connect_error;
		}else{
			$this->erro = "conectado";
		}
	}

	function debugar(){
		return $this->erro;
	}
}

