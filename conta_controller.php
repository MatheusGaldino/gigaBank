<?php 
namespace Banco;

require_once 'model/DbConn.php';
require_once 'model/conta.php';

header("Content-type: text/html; charset=utf-8");
session_start();
$_SESSION['agConta'] = '0010';

//seta a conexão com o banco
$conn = new dbConn();

//seta o banco na classe conta
$conta = new Conta();
$conta->setDb($conn->pegarBanco());

//seta uma conta
$conta->setConta($_SESSION['cpf'], $_POST['tipoConta'],$_POST['senha'],$_POST['contrato'], $_POST['cartao'], $_SESSION['agConta']);


//realiza o cadastro de um conta na tabela
$conta->cadastrarConta();

header('location: sucesso_controller.php');