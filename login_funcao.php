<?php
	require('./conexao.php');
	$user = $_POST['user'];
	$pass = md5($_POST['pass']);

	$verifica = $bd->query("SELECT usuario, senha FROM autor WHERE usuario = '$user' && senha = '$pass'");

	if(empty($_POST['user']) || empty($_POST['pass']))
	{
		echo '<script>alert("Preencha todos os campos para logar"); window.location.href = "./login.php";</script>';
	}
	elseif(mysqli_num_rows($verifica)<=0)
	{
		echo '<script> alert("O usuario ou senha está errado"); window.location.href = "./login.php";</script>';
	}
	else
	{
		setcookie("login",$user);
		header('Location:./usuario.php');
	}
?>