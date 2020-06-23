<?php

namespace Banco;
header("Content-type: text/html; charset=utf-8");
date_default_timezone_set('America/Sao_Paulo');

/* Classe que realiza as operações das contas */
class Conta
{
	private $cpf;
	private $tipo;
	private $senha;
	private $numContrato;
	private $numConta;
	private $agConta;
	private $possuiCartao;
	private $taxaMensal;
	private $saldo;
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
	public function setConta($a, $b, $c, $d, $e)
	{	
		$this->cpf = $a;
		$this->tipo = $b;
		$this->senha = $c;
		$this->numContrato = $d;
		
		$this->possuiCartao = $e;
		
		//define a taxa mensal de acordo com o tipo de conta
		switch ($this->tipo) {
			case '1':
				$this->taxaMensal = 20;
				break;
			case '2':
				$this->taxaMensal = 0;
				break;
			case '3':
				$this->taxaMensal = 0;
				break;
			case '4':
				$this->taxaMensal = 5;
				break;
			default:
				$this->taxaMensal = 15;
				break;
		}
		$this->saldo = 0;
		$this->dataCadastro = date('c');

		$db = $this->db;
		$res = $db->query("SELECT numConta FROM conta ORDER BY numConta DESC LIMIT 1");
		$row = $res->fetch_assoc();

		$this->numConta = $row['numConta'] + 1;
		$this->agConta = 1;
	}

	public function cadastrarConta(){
		$db = $this->db;

		if($db->query("INSERT INTO conta (cpf, tipo, numContrato, senhaConta, numConta, agConta, possuiCartao, taxaMensal, saldo, dataCadastro) values ('{$this->cpf}', '{$this->tipo}', '{$this->numContrato}', '{$this->senhaConta}', '{$this->numConta}', '{$this->agConta}', '{$this->possuiCartao}', '{$this->taxaMensal}', '{$this->saldo}', '{$this->dataCadastro}')")){
			return 'foi';
		}else{
			return 'numfoi';
		}
	}

	public function atualizarCliente(){
		$db = $this->db;

		$db->query("INSERT INTO cliente (nome) values ('{$this->nome}')");
	}
}