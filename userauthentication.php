<!DOCTYPE html>
<html>
<head>
	<title>userauthentication</title>
	<script type="text/javascript">
		function loginsuccessfully(){
		 setTimeout("window.location='http://localhost/App/index.php'", 5000);
		}
		function loginfailed(){
		 setTimeout("window.location='http://localhost/App/login.html'", 5000);
		}
</script>
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
	$email=$_POST['email'];
	$senha=$_POST['senha'];

	$sql = mysqli_query($conexao, "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha' ") or die(mysqli_error());
	$row = mysqli_num_rows($sql);

		if($row > 0){
		 session_start();
		 $_SESSION['email']=$_POST['email'];
		 $_SESSION['senha']=$_POST['senha'];
		 echo "<center>Você foi autentificado com sucesso! Aguarde um instante.</center>"; 
		 echo "<script>loginsuccessfully()</script>";
		} else {
		 echo "<center>Nome de usuario ou senha invalido!Aguarde um instante enquanto você é redirecionado.</center>";
		 echo "<script>loginfailed()</script>";
		}

	?>

</body>
</html>