<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="./estilo.css" rel="stylesheet" />
</head>
<body>
	<?php require('./head.php');//Cabeçalho padrão ?>
	<div id="conteudo">
		<form method="POST" id="" action="./login_funcao.php">
			Usuario: <input type="text" name="user"> <br />
			Senha: <input type="password" name="pass"><br />
			<button>Enviar</button>
		</form>
	</div>
</body>
</html>