<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Cliente</title>
	<meta charset="utf-8">

	<link rel="stylesheet" href="../../css/bootstrap.min.css">

	<link rel="stylesheet" href="../../css/style.css">

</head>
<body>
	<div class="mt-3 container soft-border">
		<h1 class="titulo-form">Novo cliente cadastrado com sucesso!</h1>
			<div class='row'>
				<div class='col'>
					<?=	$_SESSION['cliente'] ?>
				</div>
				<div class='col'>
					<?=	$_SESSION['conta'] ?>
				</div>
			</div>
		<a href="../menu">Voltar</a>
	</div>
	<script src="../../js/jquery.min.js"></script>
	<script src="../../js/popper.min.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
</body>
</html>