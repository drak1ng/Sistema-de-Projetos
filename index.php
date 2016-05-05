<?php include "sistema_configuracao.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Projetos</title>
		<link href="/css/bootstrap.min.css" rel="stylesheet">
		<link href="/css/messagebox.css" rel="stylesheet">
		<link href="/css/site.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="/js/html5shiv.min.js"></script>
			<script src="/js/respond.min.js"></script>
		<![endif]-->
		<script src="/js/jquery.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script src="/js/messagebox.min.js"></script>
	</head>
	
	<body>
		<?
			if(!checarSecao()){
				include "sistema_login.php";
			}else{
				include "sistema_interna.php";
			}
		?>
		
	</body>
</html>