<!DOCTYPE html>
<html>
<head>
	<title>Seus Posts</title>

	<link href="./estilo.css" rel="stylesheet" /><!--Estilo CSS padrão todas as páginas-->
</head>
<body>
	<?php require('./head.php');//Cabeçalho padrão ?>

	<div id="conteudo">
	<style type="text/css">a:hover{color: red;}</style>
		<h3>Suas Postagens</h3>

		<?php
			$cat = $_GET['categoria'];

			$sql = $bd->query("SELECT id_categoria FROM categoria WHERE titulo = '$cat'");//SQL de seleção de categorias
			$id = mysqli_fetch_array($sql);
			$catID = $id['id_categoria'];
			$resultados = $bd->query("SELECT * FROM noticia WHERE id_categoria = '$catID' ORDER BY id_noticia DESC");

			if($resultados ->num_rows > 0)
				while ($posts = mysqli_fetch_array($resultados))//Apresentação das categorias
				{	
					//Link criado dinamicamente passando o ID da Categoria via GET para edição
					echo '<strong><a href="./leitura.php?id_noticia='.$posts['id_noticia'].'">'.$posts['titulo'].'</a></strong> ';
					echo $posts['resumo'].'<br/>';
				}
		?>

	</div>

</body>
</html>