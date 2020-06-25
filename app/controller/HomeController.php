<?php 


require_once $_SERVER['DOCUMENT_ROOT']."/gigabank/app/model/Usuario.php";

/**
 * 
 */
class HomeController
{
	private static $title = "Home";
	private static $css = "";
	private static $js = "";
	
	public static function index(){
		$conteudo = file_get_contents('app/view/home.html');
		
		//realiza o login do usuário
		if(isset($_POST['user']) && isset($_POST['senha'])){
			$usuario = new Usuario();
			
			$conn = new DBConn();
			
			$usuario->setDb($conn->getDb());
			$res = $usuario->login($_POST['user'], $_POST['senha']);
		}
		
		if (isset($res) && $res == "erro") {
			$conteudo = str_replace('{{erro}}', 'Erro ao fazer login', $conteudo);
		}else{
			$conteudo = str_replace('{{erro}}', '', $conteudo);			
		}

		

		

		echo $conteudo;
				
		$return = ["title" => self::$title, "css"=>self::$css, "js"=>self::$js];
		return $return;
	}
}