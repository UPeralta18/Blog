<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./estilo.css">
</head>
<body>
	<?php require('./head.php');//Cabeçalho padrão ?>
	<style type="text/css">a:hover{color: red;}</style>
	<div id="conteudo">
		<?php

			$resultados = $bd->query("SELECT * FROM autor");//SQL de seleção de autores

			if($resultados ->num_rows > 0)
				while ($autor = $resultados->fetch_object())//Apresentação dos autores
				{	
					//Link criado dinamicamente passando o usuario do autor via GET
					echo '<a href="./profile.php?autor='.$autor->usuario.'">'.$autor->nome.' A.K.A. '.$autor->usuario.'</a><br/>';
				}
		?>
	</div>
</body>
</html>