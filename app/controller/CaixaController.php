<?php

/**
 * 
 */
class CaixaController
{
	private static $title = "Caixa - Pagamentos";
	private static $css = "";
	private static $js = "";
	
	public static function index(){
		$conteudo = file_get_contents('app/view/caixa.html');
		echo $conteudo;
		
		$return = ["title" => self::$title, "css"=>self::$css, "js"=>self::$js];
		return $return;
	}
}