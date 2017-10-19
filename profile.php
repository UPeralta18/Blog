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
			echo '<h3>Postagens de '.$user.'</h3>';

			$sql = $bd->query("SELECT * FROM autor WHERE usuario = '$user'");//SQL de seleção de categorias
			$id = mysqli_fetch_array($sql);
			$userID = $id['id_autor'];
			$resultados = $bd->query("SELECT * FROM noticia WHERE id_autor = '$userID' ORDER BY id_noticia DESC");

			if($resultados ->num_rows > 0)
				while ($posts = mysqli_fetch_array($resultados))//Apresentação das categorias
				{	
					//Link criado dinamicamente passando o ID da Categoria via GET para edição
					echo '<strong><a href="./leitura?id_noticia='.$posts['id_noticia'].'">'.$posts['titulo'].'</a></strong> ';
					echo $posts['resumo'];
					if(isset($_COOKIE['login']))
					{
						if($_COOKIE['login'] == $id['usuario'])
						{	
							echo '<form method="POST" action="./posts.php">';
							echo '<input type="hidden" name="id_noticia" value="'.$posts['id_noticia'].'" />';
							echo '<button> Editar </button> </form>';

							echo '<form method="POST" action="./excluir.php">';
							echo '<input type="hidden" name="id_noticia" value="'.$posts['id_noticia'].'" />';
							echo '<button> Exluir </button> </form>';
						}
					}

					echo '<br/>';

				}
		?>

	</div>

</body>
</html>