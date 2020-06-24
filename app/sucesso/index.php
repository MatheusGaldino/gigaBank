<?php namespace Banco;
    session_start();
    require_once "../_controller/paths.php";
    require_once '../_model/DbConn.php';
    require_once '../_model/conta.php';
    require_once '../_model/cliente.php';

    header("Content-type: text/html; charset=utf-8");

    /*
    *MUDAR PARA SER DEFINIDO DE ACORDO COM O USUÁRIO QUE OPERA O SISTEMA 
    */
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















$contaTeste = new Conta();
$clienteTeste = new Cliente();

//seta o banco na classe conta
$contaTeste->setDb($conn->pegarBanco());
$clienteTeste->setDb($conn->pegarBanco());



$contaTeste->getConta($_SESSION['cpf']);
$clienteTeste->getCliente($_SESSION['cpf']);


$_SESSION['cliente'] = $clienteTeste->mostrar();
$_SESSION['conta'] = $contaTeste->mostrar();




//var_dump($_SESSION);
//var_dump($cliente);
//echo $a;
//realiza o cadastro de um conta na tabela
//echo $conta->cadastrarConta();

//header('location: view/sucesso');
require_once "../_view/sucesso/index.php";


//header('location: sucesso_controller.php');
?>