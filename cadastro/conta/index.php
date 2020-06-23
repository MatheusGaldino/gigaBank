<?php namespace Banco;
    session_start();
        
    require_once "../../_controller/paths.php";
    require_once "../../_model/DbConn.php";
    require_once "../../_model/cliente.php";

    header("Content-type: text/html; charset=utf-8");
    
    //armazena o cpf na session para testar na última etapa
    $_SESSION['cpf'] = $_POST['cpf'];

    //seta a conexão com o banco
    $conn = new dbConn();

    //seta um cliente
    $cliente = new Cliente();

    //seta o banco na classe cliente
    $cliente->setDb($conn->pegarBanco());

    //insere os dados do cliente no objeto
    $cliente->setCliente($_POST['nome'],$_POST['nasc'], $_POST['cpf'], $_POST['email'], $_POST['telefone'], $_POST['celular'], $_POST['cep'], $_POST['rua'], $_POST['numeroCasa'], $_POST['bairro'], $_POST['cidade'], $_POST['uf']);

    //realiza o cadastro de um cliente no db e retorna o resultado da operação
    $result = $cliente->cadastrarCliente();
    


    //tratar erros do form anterior e renderizar a página de acordo com o resultado
    if($result){
        include ('../../_view/cadastro/conta/index.php');
    }else{
        $erroCon = $conn->pegarBanco();
        include ('../../_view/erro.php');
    }

    
    
?>