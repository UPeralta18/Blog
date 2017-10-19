<?php
	require('./conexao.php');//Pagina de Conexão

	if(empty($_POST['titulo']) || empty($_POST['descricao']))
	{
		//Verificação se estão todos os campos preenchidos
		echo "<script>alert('Preencha todos os campos para fazer o cadastro da categoria'); 
				window.location.href = './addcategoria.php';</script>";
	}

	$titulo = $_POST['titulo'];//recebe o novo valor de título via POST
	$descricao = $_POST['descricao'];//recebe o novo valor de descrição via POST

	$verifica = $bd->query("SELECT * FROM categoria WHERE titulo ='$titulo' || descricao = '$descricao'");

	if (mysqli_num_rows($verifica)<=0)
	{
		//Criação do nova categoria

		$bd->query("INSERT INTO categoria (titulo, descricao) VALUES ('$titulo', '$descricao')");
		//Aviso de sucesso e redirecionamento para a página de categoria
		echo "<script>alert('Sucesso'); window.location.href = './categoria.php';</script>";
	}
	else
	{	
		//Aviso caso a categoria já exista e redirecionamento para a página de categoria
		echo "<script>alert('Usuário ou e-mail já cadastrado'); window.location.href = './categoria.php';</script>";
	}
?>