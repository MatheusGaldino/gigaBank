<?php

/**
 * 
 */
class ClienteController
{
	private static $title = "Inicio";
	private static $css = '<link rel="stylesheet" href="/gigabank/public/_css/validacaoForm.css">';
	private static $js = '<script src="/gigabank/public/_js/validacaoForm.js"></script>';
	
	public static function index(){
		$conteudo = file_get_contents('app/view/cliente.html');
		echo $conteudo;
		
		$return = ["title" => self::$title, "css"=>self::$css, "js"=>self::$js];
		return $return;
	}
}