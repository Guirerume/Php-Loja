<html>
	<head>
		<title>Minha Loja</title>
		<meta charset="utf-8">
		<link href="css/bootstrap.css" rel="stylesheet" />
		<link href="css/loja.css" rel="stylesheet" />
	</head>
	<body>
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<a href="index.php" class="navbar-brand">Minha loja</a>
					</div>

				<div>
					<ul class="nav navbar-nav">
					<li><a href="cadastrar-produto.php">Adiciona Produto</a></li>
					<li><a href="produto-lista.php">Produtos</a></li>
					<li><a href="contato.php">Contato</a></li>
				</ul>
				</div>
			</div>
		</div>

		<div class="container">
		<div class="principal">
			<?php 
		error_reporting(E_ALL ^ E_NOTICE);
		include("mostra-alerta.php");
		mostraAlerta("success");
		mostraAlerta("danger");?>