<!DOCTYPE html>
<html>
<head>
	<title>Editar Informações</title>
	<link href="./estilo.css" rel="stylesheet" />
</head>
<body>

	<?php require('head.php');//Cabeçalho padrão ?>


	<div id="conteudo">
	<style type="text/css">form{text-align:left;}</style>

		<?php
			$user = $_COOKIE['login'];//Recebe o login via Cookie
			
			//SQL para selecionar os dados do usuario
			$sql = $bd->query("SELECT * FROM autor WHERE usuario = '$user'");

			//Apresentação dos dados a serem editados por input com os valor antigos do banco de dados no valor padrão do input
			$infos = mysqli_fetch_array($sql);
			echo '<h3>Editar Informações</h3><form method="POST" action="./infos_funcao.php">';
			echo 'Nome: <input type="text" name="nome" value="'.$infos['nome'].'"> <br/>';
			echo 'E-mail: <input type="text" name="email" value="'.$infos['email'].'"> <br/>';
			echo 'Usuário: <input type="text" name="usuario" value="'.$infos['usuario'].'"> <br/>';
			echo 'Senha: <input type="password" name="senha"> <br/><br/>';
			echo '<button>Salvar</button> </form>';
		?>
		
	</div>

</body>
</html>