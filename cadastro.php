<!DOCTYPE html>
<html>
<head>
	<title>Pagina para cadastro</title>
	<link href="./estilo.css" rel="stylesheet" />
</head>
<body>
	<?php require('./head.php');//Cabeçalho padrão ?>
	<div id="conteudo">
		<form method="POST" id="" action="./cadastro_funcao">
			E-mail: <input type="text" name="email"> <br />
			Nome: <input type="text" name="nome"><br />
			Usuário: <input type="text" name="user"> <br />
			Senha: <input type="password" name="senha"><br />
			<button>Enviar</button>
	</div>
</body>
</html>