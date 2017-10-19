<!DOCTYPE html>
<html>
<head>
	<title>Página de Leitura</title>
	<link href="./estilo.css" rel="stylesheet" />
</head>
<body>
	<?php require('./head.php');//Cabeçalho padrão ?>
	<div id="conteudo">
		<?php

			$id = $_GET['id_noticia'];//Recebe o ID da noticia clicada via GET

			//Seleção da noticia clicada
			$noticias = mysqli_fetch_array($bd->query("SELECT * FROM noticia WHERE id_noticia = '$id'"));
			echo '<div id="leitura"><h1>'.$noticias['titulo'].'</h1>';//Título da notica
			echo '<div id="data">'.$noticias['data'].'</div>';//Data da noticia
			
			//Seleção e exibição de dados do autor
			$autorSQL = "SELECT * FROM autor WHERE id_autor = ".$noticias['id_autor'];
			$autor = mysqli_fetch_array($bd->query($autorSQL));
			echo '<div id="autor">Autor: '.$autor['nome'].'<br /> A.K.A. '.$autor['usuario'].'</div>';
			
			echo '<p>'.$noticias['conteudo'].'</p></div>';//Exibir o conteúdo do texto
		?>
	</div>

</body>
</html>