<?php
session_start();
if(!isset($_SESSION['juri'])){
	header('location: lgvj.php');
}
?>
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
				<a class="navbar-brand ml-5" href="homevj.php">
					<img src="../imagens/logo.png" width="56"  alt="" >
				</a>
			  <button class="navbar-toggler ml-auto mr-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ">
				  <li class="nav-item active">
					<a class="nav-link" href="homevj.php">Four Wheels  <span class="sr-only">(current)</span></a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="oqefwvj.php">O que é a Four Wheels ?</a>				
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="transpvj.php">Transparência</a>
				  </li>
				 <li class="nav-item ">
					<a class="nav-link btn btn-warning" href="lgoffj.php">LOGOUT</a>
				</li>	
				</ul>
			  </div>
	</nav>
	<!-- Fim do Menu Superior -->
	<!-- Inicio Container -->
	<div class="jumbotron jumbotron-fluid bg-with">
	  <div class="container">
		  <center>
			<h6 class="display-4">Como funciona o Projeto?</h6>
			O Projeto é aliado totalmente com a sociedade, cujo os seus recursos são doações de materiais de skate, serviços voluntários, doações em dinheiro.Todo o projeto é custeado pela solidariedade da sociedade por querer ver um país melhor, com menos crianças nas ruas se alimentado da vida crimonosa, trazer a educação e o esporte para essas crianças é o principal objetivo.
			<hr widht="40%">
			<p class="lead">	
			</center>
	  </div>  
	</div>
	<!-- Fim Container -->
	<!-- Inicio Carrosel -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner " >
		<div class="carousel-item active" >
		  <img class="d-block w-100" src="../imagens/7img.jpg" style="" alt="First slide">
		</div>
		<div class="carousel-item">
		  <img class="d-block w-100" src="../imagens/8img.jpg" alt="Second slide">
		</div>
		<div class="carousel-item">
		  <img class="d-block w-100" src="../imagens/9img.jpg" alt="Third slide">
		</div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	  </a>
	</div>
	<!-- Fim do Carrosel -->    
	<br>
	<center>
	   <h1 class="display-4 ml-auto mr-auto">Projeto Social Four Wheels</H1>
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
			<img src="../imagens/fb.png" width="56"  alt="" > / ONG4WHEELS 
			<img src="../imagens/insta.png" width="46"  alt="" > / ONG4WHEELS</p>
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