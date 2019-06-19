<!DOCTYPE htm>
<html>
<head>
	<title>cadastrando</title>
</head>
<body>
	<?php 
	$host = "localhost";
	$user = "root";
	$pass = "";
	$banco = "cadastro";
	$conexao=mysqli_connect($host, $user, $pass) or die(mysqli_error());
	mysqli_select_db($conexao,$banco) or die(mysqli_error());

	?>

	<?php 
	$nome=$_POST['nome'];
	$email=$_POST['email'];
	$senha=$_POST['senha'];
	$cidade=$_POST['cidade'];
	$cpf=$_POST['cpf'];
	
	$sql = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, senha, cidade, cpf) 
	VALUES('$nome','$email','$senha','$cidade','$cpf')");

	
	echo  "<script>alert('Cadastro realizado com Sucesso!');</script>";

	header('location: login.html');

	 ?>
</body>
</html>
