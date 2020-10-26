<!-- Inicio da Conexão com Banco de Dados -->
<?php
$nome=$_POST['nome'];
$cnpj=$_POST['cnpj'];
$telefone=$_POST['telefone'];
$email=$_POST['email'];
$senha=$_POST['senha'];
$cad_vlj="insert into voljuri(nome,cnpj,telefone,email,senha) values ('$nome','$cnpj','$telefone','$email','$senha')";
$con=mysqli_connect("127.0.0.1","root","","fourwheels");
	if(mysqli_connect_errno())
		{echo "Failed to connect to MySql:".mysqli_connect_error();}
	mysqli_query($con,$cad_vlj);
	mysqli_close($con);	
?>
<!-- Fim da Conexão com Banco de Dados -->
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- Titulo da Pagina -->
    <title>Four Wheels</title>
	<!-- Fim do Titulo -->
  </head>
  <body>
	  <!-- Menu Superior -->
	   <nav class="navbar navbar-expand-lg navbar-light bg-light  ">
				<a class="navbar-brand ml-5" href="home.htm">
					<img src="imagens/logo.png" width="56"  alt="" >
				</a>
			  <button class="navbar-toggler ml-auto mr-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ">
			  <li class="nav-item active">
				<a class="nav-link" href="home.htm">Four Wheels  <span class="sr-only">(current)</span></a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="oqefw.htm">O que é a Four Wheels ?</a>			
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="transp.php">Transparência</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="cf.htm">Como Participar?</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="qsv.htm">Quero ser Voluntario!</a>
			  </li>
			</ul>
		  </div>
	</nav>
	<!-- Fim do Menu Superior -->
	<!-- Inicio Conteiner -->
	<div class="jumbotron jumbotron-fluid bg-with">
	  <div class="container">
		  <center>
			<h6 class="display-4">Voluntário Jurídico Cadastrado Com Sucesso!</h6>
			<hr widht="40%">
			<p class="lead">	
	  </div>
	</div>
	<!-- Fim do Container -->
	<br>
	<center>
	   <h1 class="display-4 ml-auto mr-auto">Navegue no Site</h1>
	   <hr width="40%">
	 </center>
	<br>
	<br>
	<!-- Inicio do Rodapé -->
	<div class="jumbotron jumbotron-fluid bg-warning">
	  <div class="container">
		 <center>
			<h1 class="display-4">Nossos Contatos</h1>
			
			<hr width="40%">
			<p class="lead">
			<img src="imagens/fb.png" width="56"  alt="" > / ONG4WHEELS 
			<img src="imagens/insta.png" width="46"  alt="" > / ONG4WHEELS</p>
			#VocêEm4Rodinhas<br>
			© 2018 Todos os direitos reservados. Four Wheels
		</center>
	  </div>  
	</div>
	<!-- Fim do Rodapé -->
	   <!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
   
   
	