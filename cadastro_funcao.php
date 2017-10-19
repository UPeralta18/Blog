<?php
	require('./conexao.php');//Pagina de Conexão

	if(empty($_POST['email']) || empty($_POST['nome']) || empty($_POST['user']) || empty($_POST['senha']))
	{
		//Verificação se estão todos os campos preenchidos
		echo "<script>alert('Preencha todos os campos para fazer o cadastro'); window.location.href = './cadastro.php';</script>";
	}

	//SQL para verificar se já existe o usuário ou e-mail cadastrado
	$user = $_POST['user'];//recebe o usuário novo via POST
	$email = $_POST['email'];//recebe o novo e-mail via POST
	$nome = $_POST['nome'];//recebe o novo nome via POST
	$senha = md5($_POST['senha']);//recebe o novo senha via POST
	$verifica = $bd->query("SELECT usuario, email FROM autor WHERE usuario ='$user' || email = '$email'");

	if (mysqli_num_rows($verifica)<=0)
	{
		//Criação do novo usuário
		$bd->query("INSERT INTO autor (nome, email, usuario, senha) VALUES ('$nome', '$email', '$user', '$senha')");
		setcookie("login",$user);
		//Aviso de sucesso e redirecionamento para a página de usuário
		echo "<script>alert('Sucesso'); window.location.href = './usuario.php';</script>";
	}
	else
	{	
		//Aviso caso o usuário ou e-mail já está cadastrado e redirecionamento para a página de cadastro
		echo "<script>alert('Usuário ou e-mail já cadastrado'); window.location.href = './cadastro.php';</script>";
	}
?>