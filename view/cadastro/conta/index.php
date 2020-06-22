<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Cliente</title>
	<meta charset="utf-8">

	<link rel="stylesheet" href="../../../css/bootstrap.min.css">

	<link rel="stylesheet" href="../../../css/style.css">
</head>
<body>
	<div class="mt-3 container soft-border">
		<h1 class="titulo-form">Cadastrar Conta</h1>
		<form  action="../../../conta_controller.php" method="post">
			<div class="row">
				<div class="col-md">
					<label>Tipo</label>
					<select name="tipoConta" class="mb-2 form-control">
						<option value="1">Conta Corrente</option>
						<option value="2">Conta Poupança</option>
						<option value="3">Conta Salário</option>
						<option value="4">Conta Universitária</option>
					</select>

					<label>Número do Contrato</label>
					<input class="form-control form-control-sm mb-2" type="number" name="contrato">
					
					<label>Senha de Acesso</label>
					<input class="form-control form-control-sm mb-2" type="password" name="senha">

					<label>Confirmar Senha</label>
					<input class="form-control form-control-sm mb-2" type="password" name="confirmaSenha">
				</div>
				<div class="col-md">
					<label>Cartão de Crédito</label>
			        <select name="cartao" id="cartao" class="mb-2 form-control">
						<option value="1">Sim</option>
						<option value="2">Não</option>
					</select>
			        
			        

			        <label>Limite do Cartão de Crédito</label>
			        <input class="form-control form-control-sm mb-2" name="limite" id="limite" type="text" id="rua" size="60" />

			        <label>Vencimento da Fatura</label>
			        <input class="form-control form-control-sm mb-2" name="vencimento" id="vencimento" type="date" id="bairro" size="40" />

			        <label>Senha do Cartão de Crédito</label>
			        <input class="form-control form-control-sm mb-2" name="senhaCartao" id="senhaCartao" type="password" id="cidade" size="40" />
				</div>
			</div>
			<div class="row">
				<div class="col-md">
					<input class="btn btn-primary mt-2 mb-4 envia" type="submit" value="Cadastrar" />
				</div>
			</div>
			
	    	
		</form>
		<a href="../cliente">Voltar</a>
	</div>

	<script src="../../../js/forms.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="../../../js/jquery.min.js"></script>
	<script src="../../../js/popper.min.js"></script>
	<script src="../../../js/bootstrap.min.js"></script>
</body>
</html>

