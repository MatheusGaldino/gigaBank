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
		$conteudo = file_get_contents('app/view/conta.html');
		echo $conteudo;
		var_dump($_POST);

		$return = ["title" => self::$title, "css"=>self::$css, "js"=>self::$js];
		return $return;
	}
}