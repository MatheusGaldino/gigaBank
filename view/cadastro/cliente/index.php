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
		<h1 class="titulo-form">Cadastrar Novo Cliente</h1>
		<form  action="../../../cliente_controller.php" method="post">
			<div class="row">
				<div class="col-md">
					<label>Nome</label>
					<input  class="form-control form-control-sm mb-2" type="text" name="nome">
					
					<label>CPF/CNPJ</label>
					<input class="form-control form-control-sm mb-2" type="text" name="cpf">

					<label>Data de Nascimento</label>
					<input class="form-control form-control-sm mb-2" type="date" name="nasc">

					<label>E-mail</label>
					<input class="form-control form-control-sm mb-2" type="mail" name="email">

					<label>Telefone</label>
					<input class="form-control form-control-sm mb-2" type="tel" name="telefone">

					<label>Celular</label>
					<input class="form-control form-control-sm mb-2" type="tel" name="celular">

				</div>
				<div class="col-md">
						<label>CEP:</label>
		        		<input  class="form-control form-control-sm mb-2" name="cep" type="text" id="cep" value="" size="10" maxlength="9"
		               onblur="pesquisacep(this.value);" />

		                <label>Endereço:</label>
				        <input class="form-control form-control-sm mb-2" name="rua" type="text" id="rua" size="60" />

				        <label>Número:</label>
				        <input class="form-control form-control-sm mb-2" name="numeroCasa" type="text" id="numeroCasa" size="60" />

				        <label>Bairro:</label>
				        <input class="form-control form-control-sm mb-2" name="bairro" type="text" id="bairro" size="40" />

				        <label>Cidade:</label>
				        <input class="form-control form-control-sm mb-2" name="cidade" type="text" id="cidade" size="40" />

				        <label>Estado:</label>
				        <input class="form-control form-control-sm mb-2" name="uf" type="text" id="uf" size="2" />    
				</div>
			</div>
			<div class="row">
				<div class="col-md">
					<input class="btn btn-primary mt-2 mb-4 envia" type="submit" value="Cadastrar" />
				</div>
			</div>
			
	    	
		</form>
		<a href="../../menu">Voltar</a>
	</div>
	<script type="text/javascript" src="../../../js/cep.js"></script>
	<script src="../../../js/jquery.min.js"></script>
	<script src="../../../js/popper.min.js"></script>
	<script src="../../../js/bootstrap.min.js"></script>
</body>
</html>