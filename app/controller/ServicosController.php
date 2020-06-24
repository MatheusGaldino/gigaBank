<?php

/**
 * 
 */
class ServicosController
{
	private static $title = "Opa";
	private static $css = "";
	private static $js = "";
	
	public static function index(){
		$conteudo = file_get_contents('app/view/servicos.html');

		echo $conteudo;
		
		$return = ["title" => self::$title, "css"=>self::$css, "js"=>self::$js];
		return $return;
	}
}