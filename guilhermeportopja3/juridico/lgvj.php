<?php
 $con=mysqli_connect("localhost","root","","fourwheels"); 
		 if (mysqli_connect_errno()) {echo "Failed to connect to MySQL: " . mysqli_connect_error();}

	session_start();
	if(isset($_POST["email"])) {
		$email=$_POST["email"];
		$senha=$_POST["senha"];
	$login="select*from voljuri where email='$email' and senha='$senha'";
	
	$aces= mysqli_query($con,$login);
	
	if(!$aces){
		echo"Não deu Certo!";
	}
	$info=mysqli_fetch_assoc($aces);
		if(empty($info)){
			$msg="Senha Inválida/Email Inválido!";
			}		
		else{
			$_SESSION['juri']=$info["idjuri"];
			header("location: homevj.php");		
		}	
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
	  <!-- Inicio do Menu superior -->
	   <nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand ml-5" href="../home.htm">
				<img src="../imagens/logo.png" width="56"  alt="">
			</a>
		  <button class="navbar-toggler ml-auto mr-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ">
				  <li class="nav-item active">
					<a class="nav-link" href="../home.htm">Four Wheels  <span class="sr-only">(current)</span></a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="../oqefw.htm">O que é a Four Wheels ?</a>				
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="../transp.php">Transparência</a>
				  </li>
				</ul>			
		  </div>
	</nav>
	<!-- Fim do Menu Superior -->
	<!-- Inicio Container -->
	<div class="jumbotron jumbotron-fluid bg-with ">
	  <div class="container">
		  <center>
			<h6 class="display-4">Login de Usuario!</h6>
			<hr widht="40%">
			<p class="lead">	
			<!-- Botão para acionar modal -->
			<script type="text/javascript">
				function  validar(){
					var senha = loguser.senha.value; 
					if(senha == ""){
						alert('Senha é um Campo Obrigatorio!');
						loguser.senha.focus();
						return false;
				}
				}
			</script>
			<form name="loguser" method="POST" action="lgvj.php">
			  <div class="form-row">
					<div class="form-group col-md-5">
					<label for="inputNome">Email</label>
					  <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email">
					</div>
					
					<div class="form-group col-md-3">
					  <label for="inputSenha">Senha</label>
					  <input type="password" class="form-control" id="inputSenha" name="senha" placeholder="Senha">
					</div>
			  </div>		  
			  <button type="submit" onclick="return validar()" class="btn btn-outline-dark">Logar</button>
			</form>
	  </div>  
	</div>
	<!-- Fim do Container -->
	<br>
	<!-- Inicio do Rodapé -->
	<center>
	   <h1 class="display-4 ml-auto mr-auto">Projeto Social Four Wheels</H1>
	   <hr width="40%">
		 </center>
	<br>
	<br>
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
   
   
