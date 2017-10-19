<?php
	/*Pagina para escrever noticia*/
	require('./conexao.php');//Pagina de Conexão

	$login_cookie = $_COOKIE['login'];//Recebe o login via Cookie

	if(empty($_POST['titulo']) || empty($_POST['resumo']) || empty($_POST['noticia']) || empty($_POST['cat']))
	{
		echo "<script>alert('Preencha todos os campos para mandar a noticia'); window.location.href = 'escrever.php';</script>";
	}
	else
	{
		//recebe os valores da noticia a ser postada via POST
		$titulo = $_POST['titulo'];
		$resumo = $_POST['resumo'];
		$noticia = $_POST['noticia'];
		$cat = $_POST['cat'];

		//Gera a data dinamicamente
		$data = date("Y-m-d");

		//Pegar os dados do autor da noticia
		$autorSQL = mysqli_fetch_array($bd->query("SELECT id_autor FROM autor WHERE usuario = '$login_cookie'"));
		$autor = $autorSQL['id_autor']; 

		//SQL para a inserção dos dados da noticia do Banco de Dados
		$bd->query("INSERT INTO noticia (data, resumo, titulo, conteudo, id_categoria, id_autor) VALUES ('$data', '$resumo', '$titulo', '$noticia', '$cat', '$autor')");

		//Redirecionamento para a página da noticia
		$id = mysqli_fetch_array($bd->query("SELECT id_noticia FROM noticia WHERE titulo = '$titulo'"));
		$redirecionar = 'Location:./leitura.php?id_noticia='.$id['id_noticia'];
		header($redirecionar);
	}
?>