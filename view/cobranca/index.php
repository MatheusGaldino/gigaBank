<!DOCTYPE html>
<html>
<head>
	<title>Cobrança</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../../css/bootstrap.min.css">

	<link rel="stylesheet" href="../../css/style.css">

</head>
<body>
	<div class="mt-3 container soft-border">
		<h1 class="titulo-form">Cobrança</h1>
		<form  action="" method="post">
			<div class="row">
				<div class="col-md">
					<label>Nome</label>
					<input class="form-control form-control-sm mb-2" type="text" name="nome" id="nome">

				</div>
				<div class="col-md">
					<label>CPF</label>
					<input class="form-control form-control-sm mb-2" id="cpf" type="text" name="cpf">
				</div>
				<div class="col-md">
					<label>Número de Contrato</label>
					<input class="form-control form-control-sm mb-2" id="contrato"type="number" value="1" name="contrato">
				</div>

				<div class="col-md">
					<label>Data inicial</label>
			        <input class="form-control form-control-sm mb-2" name="dataIni" type="date" id="dataIni"/>
				</div>

				<div class="col-md">
					<label>Data final</label>
			        <input class="form-control form-control-sm mb-2" name="dataFim" type="date" id="dataFim"/>
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

