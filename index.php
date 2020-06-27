<?php
//chama o core do MVC
require_once('app/core/core.php');

header("Content-type: text/html; charset=utf-8");
date_default_timezone_set('America/Sao_Paulo');

//require de todas as controllers do projeto
require_once('app/controller/ContaController.php');
require_once('app/controller/ErroController.php');
require_once('app/controller/ClienteController.php');
require_once('app/controller/MenuController.php');
require_once('app/controller/HomeController.php');
require_once('app/controller/ServicosController.php');
require_once('app/controller/SucessoController.php');
require_once('app/controller/CaixaController.php');



session_start();



if(isset($_GET['url'])){
//pega a url acessada
    $url = explode('/', $_GET['url']);
    $tamanho = count($url);
    if($url[$tamanho -1] == ''){
        $urlStr = $url[$tamanho -2];
    }else{
        $urlStr = end($url);
    }
    
}else{
    $urlStr = 'home';
}

//trás o conteúdo de uma view para a index
$core = new Core($urlStr);
$preView = $core->renderController();

//load do template base do site
$render = file_get_contents('app/template/tpl.html');

//substitui os blades ({{}}) com seus respectivos conteudos definidos nas controllers
$render = str_replace('{{Título}}', $preView['title'], $render);        //adiciona o title da página
$render = str_replace('{{conteudo}}', $preView['content'], $render);    //adiciona o conteúdo da página
$render = str_replace('{{javascript}}', $preView['js'], $render);       //adiciona um js personalizado na página
$render = str_replace('{{css}}', $preView['css'], $render);             //adiciona um css personalizado na página


//renderiza a página que foi montada
echo $render;
?>