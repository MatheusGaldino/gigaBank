<?php

namespace Banco;
header("Content-type: text/html; charset=utf-8");
date_default_timezone_set('America/Sao_Paulo');

/* Classe que realiza as operações dos clientes */
class Cliente
{
	private $dataNasc;
	private $nome;
	private $cpf;
	private $email;
	private $telefone;
	private $celular;
	private $cep;
	private $endereco;
	private $numeroCasa;
	private $bairro;
	private $cidade;
	private $uf;
	private $dataCadastro;

	private $db;
	
	
	

	/* ======================== Configurações ============================*/
	

	/*adiciona a conexão do banco a classe*/
	public function setDb($db)
	{
		$this->db = $db;
	}

	/* testa se a conexão do banco está correta*/
	public function debugDb()
	{	
		if ($db->connect_errno) {
		    return $db->erro = "Erro ao se conectar com o banco MySQL: " . $obj->connect_error;
		}else{
			return "tudo certinho";
		}
	}
	/* ===================================================================*/
	

	/* ============================ Métodos ==============================*/
	public function setCliente($a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k, $l)
	{	

		$this->nome = $a;
		$this->dataNasc = $b;
		$this->cpf = $c;
		$this->email = $d;
		$this->telefone = $e;
		$this->celular = $f;
		$this->cep = $g;
		$this->endereco = $h;
		$this->numeroCasa = $i;
		$this->bairro = $j;
		$this->cidade = $k;
		$this->uf = $l;
		$this->dataCadastro = date('Y-m-d');
		
	}
	public function cadastrarCliente(){
		$db = $this->db;

		//executa o cadastro e recebe o resultado
		$result = $db->query("INSERT INTO cliente
		 (nome, cpf, email, telefone, celular, cep, endereco, numeroCasa, bairro, cidade, 
		 uf, dataCadastro, dataNasc) 
		 values ('{$this->nome}', '{$this->cpf}', '{$this->email}', '{$this->telefone}', 
		 '{$this->celular}', '{$this->cep}', '{$this->endereco}', '{$this->numeroCasa}', 
		 '{$this->bairro}', '{$this->cidade}', '{$this->uf}', '{$this->dataCadastro}', 
		 '{$this->dataNasc}')");


		return $result;
	}

	public function getCliente($cpf){
		$db = $this->db;
		$res = $db->query("SELECT * FROM cliente where cpf = '$cpf'");
		
		$numRow = $res->num_rows;
		$row = $res->fetch_assoc();

		
		
		if ($numRow > 0) {
			$this->nome = $row['nome'];
			$this->dataNasc = $row['dataNasc'];
			$this->cpf = $cpf;
			$this->email = $row['email'];
			$this->telefone = $row['telefone'];
			$this->celular = $row['celular'];
			$this->cep = $row['cep'];
			$this->endereco = $row['endereco'];
			$this->numeroCasa = $row['numeroCasa'];
			$this->bairro = $row['bairro'];
			$this->cidade = $row['cidade'];
			$this->uf = $row['uf'];
			$this->dataCadastro = $row['dataCadastro'];

			return 'encontrado';
		} else {
			return "Cliente não encontrado";
		}
	}

	public function getNome(){
		return $this->nome;
	}

	public function atualizarCliente(){
		$db = $this->db;

		$db->query("INSERT INTO cliente (nome) values ('{$this->nome}')");
	}


	public function mostrar(){
		//mudar tipo de conta para exibição, adicionar coluna redundante no db
		return "<p> Nome Completo: " . $this->nome . "</p>
		<p> Data de Nascimento: " . $this->dataNasc . "</p>
		<p> E-mail: " . $this->email . "</p>
		<p> Telefone: " . $this->telefone . "</p>
		<p> Celular: " . $this->celular . "</p>
		<p> Endereço: " . $this->endereco . ", n" . $this->numeroCasa .  " -" . $this->bairro . "</p>
		<p>" . $this->cidade . " - " . $this->uf ." CEP: " . $this->cep . "</p>"
		;
	}

}

