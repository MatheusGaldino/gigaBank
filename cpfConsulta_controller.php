<?php 
namespace Banco;

require_once 'model/DbConn.php';
require_once 'model/cliente.php';
require_once 'model/conta.php';

header("Content-type: text/html; charset=utf-8");
session_start();

//seta a conexão com o banco
$conn = new dbConn();
//seta um cliente
$cliente = new Cliente();
$conta = new Conta();

//seta o banco na classe cliente
$cliente->setDb($conn->pegarBanco());
$conta->setDb($conn->pegarBanco());





//echo $cliente->getCliente($_POST['cpf']) . ", " . $cliente->getNome();
$result = $cliente->getCliente($_POST['cpf']);
//echo $result;

if ($result == 'encontrado') {
	//echo $cliente->getCliente($_POST['cpf']) . ", " . $cliente->getNome();
	if ($conta->getConta($_POST['cpf'])) {
		echo $result . ", " .$conta->getNumConta() . ", ". $conta->getAgConta();
	} else {
		echo "Conta não encontrada";
	}
	
	
} else {
	echo "Cliente não encontradoh";
}
