<?php

/**
 * 
 */
class SucessoController
{
	private static $title = "Sucesso";
	private static $css = "";
	private static $js = "";
	
	public static function index(){
		$conn = new dbConn();
	
		//seta um cliente
		$conta = new Conta();
	
		//seta o banco na classe cliente
		$conta->setDb($conn->getDB());
	
		//insere os dados do cliente no objeto
		$conta->setConta($_SESSION['cpf'], $_POST['tipoConta'], $_POST['senha'], $_POST['contrato'], $_POST['cartao'], '10');
	
		//realiza o cadastro de um cliente no db e retorna o resultado da operação
		$result = $conta->cadastrarConta();
		
		var_dump($result);
	
		var_dump($conn);



		$conteudo = file_get_contents('app/view/sucesso.html');

		echo $conteudo;
		
		$return = ["title" => self::$title, "css"=>self::$css, "js"=>self::$js];
		return $return;
	}
}