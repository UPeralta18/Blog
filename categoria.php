<!DOCTYPE html>
<html>
<head>
	<title>Editar categoria	</title>

	<link href="./estilo.css" rel="stylesheet" /><!--Estilo CSS padrão todas as páginas-->
</head>
<body>
	<?php require('./head.php');//Cabeçalho padrão ?>
	<style type="text/css">a:hover{color: red;}</style>
	<div id="conteudo">
		<h3><a href="./addcategoria.php">Adicionar Categoria</a></h3>
		
		<?php
			/*Pagina de edição categoria*/

			$resultados = $bd->query("SELECT * FROM categoria");//SQL de seleção de categorias

			if($resultados ->num_rows > 0)
				while ($categoria = $resultados->fetch_object())//Apresentação das categorias
				{	
					//Link criado dinamicamente passando o ID da Categoria via GET para edição
					echo $categoria->titulo.'<a href="./editar.php?id_categoria='.$categoria->id_categoria.'"> Editar</a>';
					echo '<a href="./excluir.php?id_categoria='.$categoria->id_categoria.'"> Excluir</a> <br/>';
				}
		?>
	</div>
</body>
</html>
