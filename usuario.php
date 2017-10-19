<!DOCTYPE html>
<html>
<head>
	<title>Pagina de Usuario</title>
	<link rel="stylesheet" type="text/css" href="./estilo.css">
</head>
<body>
	<?php require('./head.php');//Cabeçalho padrão ?>
	<div id="conteudo">
	<style type="text/css">a:hover{color: red;}</style>
		<a href="./escrever.php">Escrever Post</a> | 
		<a href="./categoria.php">Editar Categoria</a> | 
		<?php 
			$autor = $_COOKIE['login'];
			echo '<a href="./profile.php?autor='.$autor.'">Ver Postagens</a>'; 
		?>
	</div>
</body>
</html>