<?php
// definições de host, database, usuário e senha
$host = "localhost";
$db   = "produto";
$user = "root";
$pass = "";
$conexao = mysqli_connect($host, $user, $pass) or die(mysqli_error());
mysqli_select_db($conexao, $db) or die(mysqli_error()); 
?>

<?php
$sql = mysqli_query($conexao, "SELECT * FROM produto") or die(mysqli_error());
$row = mysqli_num_rows($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Q&E</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic|Raleway:400,300,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">







  <!-- =======================================================
    Template Name: Onassis
    Template URL: https://templatemag.com/onassis-bootstrap-agency-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>

 <div class="navbar navbar-inverse navbar-fixed-top headroom">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="index.php">Q&E</a>
        <a class="navbar-brand" href="anunciar.html">Anunciar</a>
         
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav pull-right">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="about.html">Sobre</a></li>
          <li><a href="contact.html">Contatos</a></li>
          <li><a href="login.html">Login / Registre-se</a></li>  
        </ul>       
      </div>
    </div>
  </div> 

 <div id="itemwrap">
    <div class="container">
      <br>
      <h2>ANUNCIE AQUI</h2>
      <h3></h3>
      <div class="row">
        <br>
        <br>
        <br>
        <div class="col-lg-6 col-lg-offset-3">
        </div>
      </div>
    </div>  
  </div>
 <br>


<div class="row">
   <?php while($dado = mysqli_fetch_assoc($sql)) { ?>

     <div>
      <div class = "col-sm-6 col-md-4"  >       
        <div class = "thumbnail">          
         <img src="img/imagem.jpg" align="logo">        
        </div>     
      <div class = "caption" style="text-align: center;" >
         <h3><?php echo $dado['nome']; ?></h3>
         <p style=" text-align: left;"><?php echo $dado['descricao']; ?></p>                
      </div>
   </div>
  </div>
   <?php } ?>
</div>

  
   <div class="row">
    <div class="container">
           

    </div>         
   </div>
        
         
  </div>  

<footer id="footer" class="top-space"><!-- ========== FOOTER SECTION ========== -->
  <section id="contact" name="contact">
    <div id="f">
      <div class="container">
        <div class="row">
          <h3><b>Entre em contato</b></h3>
          <br>
          <div class="col-lg-4">
            <h3><b>Envie-nos uma mensagem:</b></h3>
            <h3>edigleison7@gmail.com</h3>
            <br>
          </div>

          <div class="col-lg-4">
            <h3><b>Ligue para nós:</b></h3>
            <h3>+85 99925-4736</h3>
            <br>
          </div>

          <div class="col-lg-4">
            <h3><b>Rede sociais</b></h3>
            <p>
              <a href="index.html#"><i class="fa fa-facebook"></i></a>
              <a href="index.html#"><i class="fa fa-twitter"></i></a>
              <a href="index.html#"><i class="fa fa-envelope"></i></a>
            </p>
            <br>
          </div>
        </div>


      </div>
    </div>
    <!-- /container -->
    </div>
    <!-- /f -->
  </section>
</footer>
  <div id="copyrights">
    <div class="container">
      <p>
        &copy;Q&E
      </p>
    </div>
  </div>
</div>
  

  <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/php-mail-form/validate.js"></script>
  <script src="lib/chart/chart.js"></script>
  <script src="lib/easing/easing.min.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
