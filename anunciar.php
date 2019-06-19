<?php
// definições de host, database, usuário e senha
$host = "localhost";
$db   = "produto";
$user = "root";
$pass = "";
$conexao=mysqli_connect($host, $user, $pass) or die(mysqli_error());
mysqli_select_db($conexao, $db) or die(mysqli_error());
?>


<?php

      
    $nome=$_POST['nome'];    
    $descricao=$_POST['descricao'];
	  
        $sql = mysqli_query($conexao, "INSERT INTO produto (nome, descricao) 
        VALUES ($nome' ,'$descricao')"); 
    

    echo  "<script>alert('Cadastro realizado com Sucesso!');</script>";

  header('location: index.php');
?>


</body>
</html>