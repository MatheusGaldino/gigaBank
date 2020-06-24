<?php
class Core{
	private $controller;

	public function __construct($url){
		$this->controller = ucfirst($url."Controller"); //define o nome da controller acessada dinamicamente 
		//verifica se existe alguma classe da controller chamada
		if (!class_exists($this->controller)) {
			$this->controller = "ErroController"; //returno em caso de link errado
		} 
	}



	//carrega uma view de uma página e a retorna junto com os dados para aplicar no {blade}
	public function renderController(){
		//define qual método da controller será chamado   personalizar para páginas de update
		$acao = 'index';

		//carrega o conteúdo da view
		ob_start(); //evita render e headers
			//chama um método da controller de forma estática
			$returnController  = call_user_func_array(array($this->controller, $acao), array()); 
			$render = ob_get_contents(); //pega tudo que seria renderizado
		ob_end_clean(); //finaliza o bloqueio de renders

		//array com os dados blade da view
		$dados = ["content" => $render, "title" => $returnController['title'], "css" => $returnController['css'], "js" => $returnController['js']];
		return $dados;
	}
}