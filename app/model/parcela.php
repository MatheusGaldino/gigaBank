<?php 

/* Classe que realiza as operações dos clientes */
class Parcela
{

	private $valor;
	private $numParcela;
	private $totalParcela;
	private $valorPago;
	private $status;
	private $item;
	private $vencimento;
	private $pagamento;
	private $codBarras;


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
	public function setParcela($a, $b, $d, $e)
	{	

		$this->valor = $a;
		$this->numParcela = 1;
		$this->totalParcela = $b;
		$this->item = $d;
		$this->vencimento = $e;
		
		//$this->codBarras = $f;
		
	}
	public function cadastrarParcela(){
		$db = $this->db;

		if($db->query("INSERT INTO servico (valor, numParcela, totalParcela, item, vencimento, codBarras) values ('{$this->valor}', '{$this->numParcela}', '{$this->totalParcela}', '{$this->item}', '{$this->vencimento}', '{$this->codBarras}')")){
			
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

