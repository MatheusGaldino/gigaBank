<?php 

require_once 'DbConn.php';
require_once 'cliente.php';
require_once 'conta.php';

/* Classe que realiza cadastro e autenticação de usuário */
class Usuario
{
	private $user;
    private $senha;
    
	private $db;
	
	


	
	/* ======================== Configurações ============================*/
	

	/*adiciona a conexão do banco a classe*/
	public function setDB($db)
	{
		$this->db = $db;
	}

	/* testa se a conexão do banco está correta*/
	public function debugDB()
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
		$this->senhaConta = $c;
		$this->numContrato = $d;
		
		$this->possuiCartao = $e;
		
		
		
		$this->numConta = str_pad($row['numConta'] + 1, 6, "0", STR_PAD_LEFT);
		$this->agConta = $f;
	}



	public function cadastrarConta(){
		$db = $this->db;

		if($db->query("INSERT INTO conta (cpf, tipo, numContrato, senhaConta, numConta, agConta, possuiCartao, taxaMensal, saldo, dataCadastro) values ('{$this->cpf}', '{$this->tipo}', '{$this->numContrato}', '{$this->senhaConta}', '{$this->numConta}', '{$this->agConta}', '{$this->possuiCartao}', '{$this->taxaMensal}', '{$this->saldo}', '{$this->dataCadastro}')")){
			return 'foi';
		}else{
			return 'numfoi';
		}
	}


	public function login($user, $pass){
		$user = filter_var($user, FILTER_SANITIZE_STRING);
		$pass = filter_var($pass, FILTER_SANITIZE_STRING);

		$db = $this->db;

		$res = $db->query("SELECT 'usuario', 'senha' FROM usuario where usuario = '$user' && senha = '$pass'");

		if($res->num_rows>0){
			header('location: menu');
			$_SESSION['login'] = true;
		}else{
			return "erro";
		}
	}
}