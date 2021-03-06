<!DOCTYPE html>
<html>
<head>
	<title>Serviços</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href=<?php echo "$bootstrapPath";?>>
	<link rel="stylesheet" href=<?php echo "$cssPath";?>>
</head>
<body>
	<div class="mt-3 container soft-border">
		<h1 class="titulo-form">Serviços</h1>

		<!-- arrumar o action -->
		<form  action="../../servico_controller.php" method="post">
			<div class="row">
				<div class="col-md">
					<label>Tipo</label>
					<select name="servico" id="servico" class="mb-2 form-control">
						<option>Financiamento</option>
						<option>Empréstimo</option>
						<option>Seguro</option>
					</select>

					
					
					<label>Número de Contrato</label>
					<input id="numContrato" class="form-control form-control-sm mb-2" type="number" name="numContrato">

					<label>Valor</label>
					<input step="0.01" class="form-control form-control-sm mb-2" id="valor" type="number" name="valor">

					<label>Parcelas</label>
					<div class="input-group-prepend junta">
						<input class="junta-1 form-control form-control-sm mb-2" id="numParcela"type="number" value="1" name="numParcela">
						<input step="0.01" class="junta-2 form-control form-control-sm mb-2" id="valParcela" type="number" name="valParcela">
					</div>
					
					<label>Valor Total</label>
					<input class="form-control form-control-sm mb-2" id="valorTotal" type="number" step="0.01" name="valorTotal">

					<label>Data do 1° Pagamento</label>
			        <input class="form-control form-control-sm mb-2" name="vencimento" type="date" id="vencimento" />


				</div>
				<div class="col-md">
					<label>CPF</label>
					<input class="form-control form-control-sm mb-2" type="text" name="cpfConsulta" id="cpfConsulta">
					<p class="some" id="cpf">Cliente Não Encontrado</p>

					<label>Conta Vinculada</label>
			        <select name="conta" id="conta" class="mb-2 form-control">
						
					</select>
			        
			        

			        <label>Descrição</label>
			        <textarea placeholder="Para casos de financiamento, descreva qual o bem comprado e os dados do vendedor" class="form-control form-control-sm mb-2" id="desc" name="desc" rows="11"></textarea>
					
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


	<!--TIRAR DAQUI ISSO É REGRA DE NEGÓCIO-->
	<script type="text/javascript">
		var valor = document.getElementById('valor');;
		var numParcela = document.getElementById('numParcela');
		var valParcela = document.getElementById('valParcela');
		var valorTotal = document.getElementById('valorTotal');


		numParcela.onblur = function() {
			if (numParcela.value > 1) {
				valParcela.value = (((valor.value / numParcela.value) * (1+(numParcela.value*0.006))*100)/100).toFixed(2);
				valorTotal.value = (((valParcela.value * numParcela.value)*100)/100).toFixed(2);
			}else{
				valParcela.value = ((valor.value*100)/100).toFixed(2);
				valorTotal.value = ((valor.value*100)/100).toFixed(2);
			}
		}
	</script>
	

	<script src=<?php echo "$jqueryPath";?>></script>
	<script src=<?php echo "$popperPath";?>></script>
	<script src=<?php echo "$bootstrapJsPath";?>></script>
	

	<script src=<?php echo "$cpfPath";?>></script>

</body>
</html>

