<?php 
namespace Banco;

require_once 'model/DbConn.php';
require_once 'model/servico.php';
require_once 'model/parcela.php';

header("Content-type: text/html; charset=utf-8");
session_start();


//seta a conexão com o banco
$conn = new dbConn();


$servico = new Servico();
$parcela = new Parcela();
$servico->setDb($conn->pegarBanco());
$parcela->setDb($conn->pegarBanco());

var_dump($_POST);
$conta = substr($_POST['conta'], 0 ,strpos($_POST['conta'], ' - '));
//$ag = 
var_dump($conta);
$servico->setServico($_POST['cpfConsulta'], $_POST['conta'], $_POST['conta2'],$_POST['valor'],$_POST['numParcela'], $_POST['servico'], $_POST['numContrato'], $_POST['desc']);

$parcela->setParcela($_POST['valor'], $_POST['numParcela'], $_POST['servico'],$_POST['vencimento']);


//$parcela->setParcela();



//header('location: sucesso_controller.php');