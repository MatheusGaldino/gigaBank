<?php 

/* Classe que realiza as operações dos clientes */
class Servico
{
	private $cpf;
	private $conta;
	private $agencia;
	private $valor;
	private $parcelas;
	private $servico;
	private $numContrato;
	private $descricao;
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
	public function setServico($a, $b, $c, $d, $e, $f, $g, $h)
	{	

		$this->cpf = $a;
		$this->conta = $b;
		$this->agencia = $c;
		$this->valor = $d;
		$this->parcelas = $e;
		$this->servico = $f;
		$this->numContrato = $g;
		$this->descricao = $h;
		
		$this->dataCadastro = date('Y-m-d');
		
	}
	public function cadastrarServico(){
		$db = $this->db;

		if($db->query("INSERT INTO servico (cpf, conta, agencia, valor, parcelas, servico, numContrato, descricao, dataCadastro) values ('{$this->cpf}', '{$this->conta}', '{$this->agencia}', '{$this->valor}', '{$this->parcelas}', '{$this->servico}', '{$this->numContrato}', '{$this->descricao}', '{$this->dataCadastro}')")){
			
		}
	}

	public function getServico($cpf){
		$db = $this->db;
		$res = $db->query("SELECT * FROM servico where cpf = '$cpf'");
		
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

