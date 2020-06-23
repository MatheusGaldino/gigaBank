<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Cliente</title>
	<meta charset="utf-8">

	<link rel="stylesheet" href=<?php echo "$bootstrapPath";?>>
	<link rel="stylesheet" href=<?php echo "$cssPath";?>>

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
		<a href="/gigabank/menu">Voltar</a>
	</div>
	<script src=<?php echo "$jqueryPath";?>></script>
	<script src=<?php echo "$popperPath";?>></script>
	<script src=<?php echo "$bootstrapJsPath";?>></script>
</body>
</html>