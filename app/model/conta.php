<?php

/* Classe que realiza as operações das contas */
class Conta
{
	private $cpf;
	private $idCliente;
	private $tipo;
	private $senhaConta;
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
		$db = $this->db;
		if ($db->connect_errno) {
		    return $db->erro = "Erro ao se conectar com o banco MySQL: " . $obj->connect_error;
		}else{
			return "tudo certinho";
		}
	}
	/* ===================================================================*/
	

	/* ============================ Métodos ==============================*/
	public function setConta($a, $b, $c, $d, $e, $f)
	{	
		$this->cpf = $a;
		$this->tipo = $b;
		$this->senhaConta = password_hash($c, PASSWORD_BCRYPT);
		$this->numContrato = $d;
		$this->idCliente = '77';
		
		$this->possuiCartao = $e;
		
		//define a taxa mensal de acordo com o tipo de conta
		switch ($this->tipo) {
			case '1': //conta corrente
				$this->taxaMensal = 20;
				break;
			case '2': //conta pupança
				$this->taxaMensal = 0;
				break;
			case '3': //conta salário
				$this->taxaMensal = 0;
				break;
			case '4': //conta universitária
				$this->taxaMensal = 5;
				break;
			default: //default
				$this->taxaMensal = 15;
				break;
		}
		$this->saldo = 0;
		$this->dataCadastro = date('Y-m-d');

		$db = $this->db;
		$res = $db->query("SELECT numConta FROM conta ORDER BY numConta DESC LIMIT 1");
		$row = $res->fetch_assoc();

		$this->numConta = str_pad($row['numConta'] + 1, 6, "0", STR_PAD_LEFT);
		$this->agConta = $f;
	}



	public function cadastrarConta(){
		$db = $this->db;

		if($db->query("INSERT INTO conta (cpf, idCliente, tipo, numContrato, senhaConta, numConta, agConta, possuiCartao, taxaMensal, saldo, dataCadastro) values ('{$this->cpf}', '{$this->idCliente}','{$this->tipo}', '{$this->numContrato}', '{$this->senhaConta}', '{$this->numConta}', '{$this->agConta}', '{$this->possuiCartao}', '{$this->taxaMensal}', '{$this->saldo}', '{$this->dataCadastro}')")){
			return 'foi';
		}else{
			return "INSERT INTO conta (cpf, tipo, numContrato, senhaConta, numConta, agConta, possuiCartao, taxaMensal, saldo, dataCadastro) values ('{$this->cpf}', '{$this->tipo}', '{$this->numContrato}', '{$this->senhaConta}', '{$this->numConta}', '{$this->agConta}', '{$this->possuiCartao}', '{$this->taxaMensal}', '{$this->saldo}', '{$this->dataCadastro}'";
		}
	}


	public function getConta($cpf){
		$db = $this->db;
		$res = $db->query("SELECT * FROM conta where cpf = '$cpf'");
		$numRow = $res->num_rows;
		$row = $res->fetch_assoc();
		
		
		if ($numRow > 0) {
		$this->cpf = $cpf;
		$this->tipo = $row['tipo'];
		$this->senhaConta = $row['senhaConta'];
		$this->numContrato = $row['numContrato'];
		$this->numConta = $row['numConta'];
		$this->agConta = $row['agConta'];
		$this->possuiCartao = $row['possuiCartao'];
		$this->taxaMensal = $row['taxaMensal'];
		$this->saldo = $row['saldo'];
		$this->dataCadastro = $row['dataCadastro'];

			return true;
		} else {
			return "Conta não encontrada";
		}
	}

	public function getNumConta(){
		return $this->numConta;
	}

	public function getAgConta(){
		return $this->agConta;
	}
	public function mostrar(){
		//mudar tipo de conta para exibição, adicionar coluna redundante no db
		return "<p> CPF cadastrado: " . $this->cpf . "</p>
		<p> Tipo de conta: " . $this->tipo . "</p>
		<p> Número do Contrato: " . $this->numContrato . "</p>
		<p> Numero da Conta: " . $this->numConta . "</p>
		<p> Agência: " . $this->agConta . "</p>
		<p> Taxa mensal: R$ " . number_format($this->taxaMensal, 2, ',', '.') . "</p>"
		;
	}


	public function atualizarCliente(){
		$db = $this->db;

		$db->query("INSERT INTO cliente (nome) values ('{$this->nome}')");
	}
}