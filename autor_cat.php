<!DOCTYPE html>
<html>
<head>
	<title>Seus Posts</title>

	<link href="./estilo.css" rel="stylesheet" /><!--Estilo CSS padrão todas as páginas-->
</head>
<body>
	<?php require('./head.php');//Cabeçalho padrão ?>

	<div id="conteudo">
		<h3>Escolha uma categoria</h3>
		<form method="GET" action="./autor_cat_funcao.php">
			<div id="categorias">
			
				<?php

					$resultados = $bd->query("SELECT * FROM categoria");

					if($resultados ->num_rows > 0)
						while ($categoria = $resultados->fetch_object())
						{
							echo '<input type="radio" name="cat" value="'.$categoria->titulo.'"> '.$categoria->titulo.' ';
						}
				?>
			</div>

			<h3>Escolha um autor</h3>

			<div id="autores">
				<?php

					$resultados = $bd->query("SELECT * FROM autor");

					if($resultados ->num_rows > 0)
						while ($autor = $resultados->fetch_object())
						{
							echo '<input type="radio" name="autor" value="'.$autor->usuario.'"> '.$autor->usuario.' ';
						}
				?>
			</div>
			<br />
			<button>Encontrar!</button>
		</form>

	</div>

</body>
</html>