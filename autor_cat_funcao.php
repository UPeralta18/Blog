<!DOCTYPE html>
<html>
<head>
	<title>Seus Posts</title>

	<link href="./estilo.css" rel="stylesheet" /><!--Estilo CSS padrão todas as páginas-->
</head>
<body>
	<?php require('./head.php');//Cabeçalho padrão ?>

	<div id="conteudo">
	<style type="text/css">a:hover{color: red;} #conteudo{text-align: left;} #conteudo h3, h2{text-align: center;} </style>
		<?php
			$user = $_GET['autor'];
			$cat = $_GET['cat'];

			echo '<h3>Postagens de '.$user.' da categoria '.$cat.'</h3>';

		

			$sql = $bd->query("SELECT id_autor FROM autor WHERE usuario = '$user'");//SQL de seleção de autor
			$id = mysqli_fetch_array($sql);
			$sql2 = $bd->query("SELECT id_categoria FROM categoria WHERE titulo = '$cat'");//SQL de seleção de autor
			$id2 = mysqli_fetch_array($sql2);
			$userID = $id['id_autor'];
			$catID = $id2['id_categoria'];
			$resultados = $bd->query("SELECT * FROM noticia WHERE id_autor = '$userID' AND id_categoria = '$catID' ORDER BY id_noticia DESC");

			if($resultados ->num_rows > 0)
				while ($posts = mysqli_fetch_array($resultados))//Apresentação das categorias
				{	
					//Link criado dinamicamente passando o ID da Categoria via GET para edição
					echo '<strong><a href="./leitura.php?id_noticia='.$posts['id_noticia'].'">'.$posts['titulo'].'</a></strong> ';
					echo $posts['resumo'].'<br/>';
				}
			else
			{
				echo '<h2> Nenhuma postagem de '.$user.' na categoria '.$cat.' foi encontrada :c </h2>';
			}
		?>

	</div>

</body>
</html>