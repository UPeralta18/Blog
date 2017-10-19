<div id="head">
	<div id="infos">
		<?php
			require('./conexao.php');//Pagina de Conexão
					
			if(empty($_COOKIE['login']))
			{
				echo '<a href="./login.php">Login</a><br />
						<a href="./cadastro.php">Cadastro</a>';
			}
			else
			{
				$login_cookie = $_COOKIE['login'];//Recebe os dados de login via Cookie
				//Pegar os dados do autor da noticia
				$autorSQL = mysqli_fetch_array($bd->query("SELECT usuario FROM autor WHERE usuario = '$login_cookie'"));
				echo 'Seja bem vindo '.$autorSQL['usuario'].'
						<br /> <a href="./usuario.php">Configurações</a>
						<br /> <a href="./sair.php">Sair</a>';
			}
		?>
	</div>

	<h1><a href="./index.php">BLOGRALTA</a></h1>

	<div id="menu">
		<a href="./autores.php"> Autores </a> |
		<a href="./cats.php"> Categorias </a> |
		<a href="./autor_cat.php"> Autor & Categoria </a>
	</div>
</div>