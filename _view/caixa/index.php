<!DOCTYPE html>
<html>
<head>
	<title>Caixa</title>
	<meta charset="utf-8">
	
	<link rel="stylesheet" href=<?php echo "$bootstrapPath";?>>
	<link rel="stylesheet" href=<?php echo "$cssPath";?>>


</style>
</head>
<body>
	<div class="mt-3 container soft-border">
		<h1 class="titulo-form">Caixa</h1>
		<form action="#" method="post">
			<div class="row">
				<div class="col-md">
					<label id="operacaoL">Operação</label>
					<select name="operacao" id="operacao" class="mb-2 form-control">
						<option value="1">Recebimento de Boleto</option>
						<option value="2">Recebimento de Fatura de Cartão</option>
						<option value="3">Depósito</option>
						<option value="4">Retirada de Dinheiro</option>
					</select>

					<!--recebimento de faturas e boletos-->
					<label id="formaL">Forma de Pagamento</label>
					<select id="forma" name="forma" class="mb-2 form-control">
						<option>Dinheiro</option>
						<option>Cartão de Débito</option>
						<option>Cheque</option>
					</select>

					<label id="codigoL"><b>Código de Barras</b></label>
					<input class="form-control form-control-lg mb-2" type="text" id="codigo" name="codigo">

					<label id="vencimentoL">Data de Vencimento</label>
					<input class="form-control form-control mb-2" type="date" name="vencimento" id="vencimento">

					<label id="jurosL">Juros</label>
					<input class="form-control form-control mb-2" type="number" name="juros" id="juros">

					<!-------------------------------------------->

					<!--Depósitos-->
					<label id="numContaL">Número da Conta</label>
					<input class="form-control form-control mb-2" type="text" name="numConta" id="numConta">
					
					<label id="agL">Agência</label>
					<input class="form-control form-control mb-2" type="text" name="ag" id="ag">
					
					<label id="tipoContaL">Tipo de Conta</label>
					<select name="tipoConta" id="tipoConta" class="mb-2 form-control">
						<option>Conta Corrente</option>
						<option>Conta Poupança</option>
					</select>
					<!-------------------------------------------->

					<label id="valorL"><b>Valor</b></label>
					<input class="form-control form-control-lg mb-2" type="text" name="valor" id="valor">
				</div>
		</div>
		

		
    	<div class="row">
			<div class="col-md">
				<input class="btn btn-primary mt-2 mb-4 envia" type="submit" value="Cadastrar" />
			</div>
		</div>
	</form>
	<a href="../menu">Voltar</a>
</div>

	<script src=<?php echo "$caixaJsPath";?>></script>
	<script src=<?php echo "$jqueryPath";?>></script>
	<script src=<?php echo "$popperPath";?>></script>
	<script src=<?php echo "$bootstrapJsPath";?>></script>
</body>
</html>