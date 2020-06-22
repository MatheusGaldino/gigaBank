<?php 
namespace Banco;

require_once 'model/DbConn.php';
require_once 'model/conta.php';
require_once 'model/cliente.php';

header("Content-type: text/html; charset=utf-8");
session_start();



//seta a conexão com o banco
$conn = new dbConn();


$conta = new Conta();
$cliente = new Cliente();

//seta o banco na classe conta
$conta->setDb($conn->pegarBanco());
$cliente->setDb($conn->pegarBanco());



$conta->getConta($_SESSION['cpf']);
$cliente->getCliente($_SESSION['cpf']);
//$conta->getConta($_SESSION['cpf']);

$_SESSION['cliente'] = $cliente->mostrar();
//$res = $conta->mostrar();
$_SESSION['conta'] = $conta->mostrar();




//var_dump($_SESSION);
//var_dump($cliente);
//echo $a;
//realiza o cadastro de um conta na tabela
//echo $conta->cadastrarConta();

header('location: view/sucesso');