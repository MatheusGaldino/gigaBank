<?php

/**
 * 
 */
class ContaController
{
	private static $title = "Inicio";
	private static $css = "";
	private static $js = "";
	
	public static function index(){

		//armazena o cpf na session para testar na última etapa
		$_SESSION['cpf'] = $_POST['cpf'];

		//seta a conexão com o banco
		$conn = new dbConn();
	
		//seta um cliente
		$cliente = new Cliente();
	
		//seta o banco na classe cliente
		$cliente->setDb($conn->getDB());
	
		//insere os dados do cliente no objeto
		$cliente->setCliente($_POST['nome'],$_POST['nasc'], $_POST['cpf'], $_POST['email'], $_POST['telefone'], $_POST['celular'], $_POST['cep'], $_POST['rua'], $_POST['numeroCasa'], $_POST['bairro'], $_POST['cidade'], $_POST['uf']);
	
		//realiza o cadastro de um cliente no db e retorna o resultado da operação
		$result = $cliente->cadastrarCliente();
		
		var_dump($result);
	
		//tratar erros do form anterior e renderizar a página de acordo com o resultado
		if($result){
			//include ('../../_view/cadastro/conta/index.php');
		}else{
			$erroCon = $conn->pegarBanco();
			//include ('../../_view/erro.php');
		}




		$conteudo = file_get_contents('app/view/conta.html');
		echo $conteudo;
		//var_dump($_POST);

		$return = ["title" => self::$title, "css"=>self::$css, "js"=>self::$js];
		return $return;
	}
}