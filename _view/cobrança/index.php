<!DOCTYPE html>
<html>
<head>
	<title>Cobrança</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../../css/bootstrap.min.css">

<style type="text/css">
	.soft-border {
		background-color: #eee;
		border-radius: 5px;
		padding-top: 10px; 
	}

	.titulo-form{
		border-bottom: 1px solid black;
		padding-left:10px; 
	}

	
	.btn-primary{
		width: 50%;
		margin-left: 25%;
		background-color: #4bd184;
		border-color: #4bd184;
	}

	.envia:hover{
		background-color: #2fac64;
		border-color: #2fac64;
	}

	.envia:active{
		background-color: #2fac64;
		border-color: #2fac64;
	}
</style>
</head>
<body>
	<div class="mt-3 container soft-border">
		<h1 class="titulo-form">Cobrança</h1>
		<form  action="" method="post">
			<div class="row">
				<div class="col-md">
					<label>Nome</label>
					<input class="form-control form-control-sm mb-2" type="number" name="numContrato">

				</div>
				<div class="col-md">
					<label>CPF</label>
					<input class="form-control form-control-sm mb-2" id="valor" type="number" name="">
				</div>
				<div class="col-md">
					<label>Número de Contrato</label>
					<input class="form-control form-control-sm mb-2" id="numParcela"type="number" value="1" name="">
				</div>

				<div class="col-md">
					<label>Data inicial</label>
			        <input class="form-control form-control-sm mb-2" name="vencimento" type="date" id="bairro" size="40" />
				</div>

				<div class="col-md">
					<label>Data final</label>
			        <input class="form-control form-control-sm mb-2" name="vencimento" type="date" id="bairro" size="40" />
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


	<script src="../../js/jquery.min.js"></script>
	<script src="../../js/popper.min.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
</body>
</html>

