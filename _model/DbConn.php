<?php

namespace Banco;
header("Content-type: text/html; charset=utf-8");

/* classe que seta a conexão com o banco de dados */
class dbConn{
	/*dados do banco que desejamos nos conectar*/
	private $server = "localhost";
	private $banco = "gigaBank";
	private $user = "root";
	private $senha = "";

	private $db;


	function __construct(){  
		$obj = new \mysqli($this->server, $this->user, $this->senha, $this->banco);

		
		if ($obj->connect_errno) {
		    $this->erro = "Erro ao se conectar com o banco MySQL: " . $obj->connect_error;
		}

		$obj->set_charset("utf8");
		return $this->db = $obj;
	}

	//
	function pegarBanco(){
		return $this->db;
	}

	function encerrarDB(){
		//return $this->db;
	}
}
