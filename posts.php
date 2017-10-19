<!DOCTYPE html>
<html>
<head>
	<title>Editar Categoria</title>
	<link href="./estilo.css" rel="stylesheet" />

	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 

	<!-- include summernote css/js-->
	<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
	<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>

</head>
<body>
	<?php require('./head.php');//Cabeçalho padrão ?>
	<div id="conteudo">
	<style type="text/css">#esquerda{text-align: left;}</style>
		<?php
			$id = $_POST['id_noticia'];//recebe ID da notica via POST

			//SQL para selecionar os dados da noticia a ser editada
			$sql = $bd->query("SELECT * FROM noticia WHERE id_noticia = '$id'");

			//Apresentação dos dados a serem editados por input com os valor antigos do banco de dados no valor padrão do input
			$noticia = mysqli_fetch_array($sql);
			echo '<form method="POST" id="esquerda" action="./posts_funcao">';
			echo '<input type="hidden" name="id_noticia" value="'.$id.'" />';
			echo 'Titulo: <input type="text" name="titulo" value="'.$noticia['titulo'].'"> <br/> <br /> Noticia:';
			echo '<textarea class="summernote" id="summernote" name="conteudo" rows="18">'.$noticia['conteudo'].'</textarea>';
			echo '<button>Salvar</button> </form>';
		?>
	</div>

	<script type="text/javascript">
		$(document).ready(function() {
		  $('#summernote').summernote();
		});
	</script>
</body>
</html>