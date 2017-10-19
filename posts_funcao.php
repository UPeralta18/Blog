<?php
	require('./conexao.php');//Pagina de Conexão

	$id = $_POST['id_noticia'];//recebe ID da categoria via POST

	$titulo = $_POST['titulo'];//recebe o novo valor de título via POST
	$conteudo = $_POST['conteudo'];//recebe o novo valor de descrição via POST

	//SQL para fazer alteração dos valor no banco de dados
	$bd->query("UPDATE noticia SET titulo = '$titulo', conteudo = '$conteudo' WHERE id_noticia = '$id' ");

	//Mensagem confirmando as alterações feitas e voltando para a página de edição de categorias
	echo "<script>alert('Edições Salvas'); window.location.href = './profile.php?autor=".$_COOKIE['login']."';</script>";
?>