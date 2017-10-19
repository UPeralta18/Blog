<!DOCTYPE html>
<html>
<head>

	

	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 

	<!-- include summernote css/js-->
	<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
	<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>

	<link href="./estilo.css" rel="stylesheet" />

	<title>Escrever</title>
</head>
<body>
	<?php require('./head.php');//Cabeçalho padrão ?>
	<div id="conteudo">
		<style type="text/css">#esquerda{text-align: left;}</style>
		<form method="POST" id="esquerda" action="./escrever_funcao.php">
			Titulo: <input type="text" name="titulo"> <br /><br />
			Resumo: <input type="text" name="resumo"><br /><br />
		
			Noticia: <br />
			<textarea class="summernote" id="summernote" name="noticia" rows="18"></textarea>
					<div id="categorias">
						<?php

							$resultados = $bd->query("SELECT * FROM categoria");

							if($resultados ->num_rows > 0)
								while ($categoria = $resultados->fetch_object())
								{
									echo '<input type="radio" name="cat" value="'.$categoria->id_categoria.'"> '.$categoria->titulo.' ';
								}
						?>
					</div>
			<button>Enviar</button>
		</form>

		<script type="text/javascript">
			$(document).ready(function() {
			  $('#summernote').summernote();
			});
		</script>

	</div>
</body>
</html>

<?php
	$login_cookie = $_COOKIE['login'];//Recebe os dados de login via Cookie
?>