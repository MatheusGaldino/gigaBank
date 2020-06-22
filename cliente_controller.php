<?php 
namespace Banco;

require_once 'model/DbConn.php';
require_once 'model/cliente.php';

header("Content-type: text/html; charset=utf-8");
session_start();
$_SESSION['cpf'] = $_POST['cpf'];

//seta a conexão com o banco
$conn = new dbConn();


//seta um cliente
$cliente = new Cliente();
//seta o banco na classe cliente
$cliente->setDb($conn->pegarBanco());



$cliente->setCliente($_POST['nome'],$_POST['nasc'], $_POST['cpf'], $_POST['email'], $_POST['telefone'], $_POST['celular'], $_POST['cep'], $_POST['rua'], $_POST['numeroCasa'], $_POST['bairro'], $_POST['cidade'], $_POST['uf']);


//realiza o cadastro de um cliente na tabela
$cliente->cadastrarCliente();

//var_dump($cliente);
header('location: view/cadastro/conta');