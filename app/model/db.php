<?php 


class DataBase extends mysqli{
	private $server;
	private $banco;
	private $user;
	private $senha;

	function __construct($se, $b, $u, $s){  
		$this->$banco = $b;
		$this->$user = $u;
		$this->$senha = $s;
		$this->$server = $se;
		
		$conn = $this->mysqli("this->$server", "this->$user", "this->$senha", "this->$banco");
		if ($conn->connect_errno) {
		    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
		}
	}

	function debugar(){
		return false;
	}
}