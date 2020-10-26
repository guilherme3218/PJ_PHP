<?php
session_start();
if(!isset($_SESSION['adm'])){
	header('location: lgadm.php');
}
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- Titulo da Página -->
    <title>Four Wheels</title>
	<!-- Fim do Titulo -->
  </head>
  <body>
	   <nav class="navbar navbar-expand-lg navbar-light bg-light  ">
		<a class="navbar-brand ml-5" href="sadm.php">
			<img src="../imagens/logo.png" width="56"  alt="" >
		</a>
		  <button class="navbar-toggler ml-auto mr-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ">
			  <li class="nav-item active">
				<a class="nav-link" href="sadm.php">Four Wheels  <span class="sr-only">(current)</span></a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#">O que é a Four Wheels ?</a>			
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#">Transparência</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#">Como Participar? </a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#">Quero ser Voluntario! </a>
			  </li>
			  <li class="nav-item ">
				<a class="nav-link btn btn-warning" href="lgofadm.php">LOGOUT</a>
			  </li>	
			</ul>		
		  </div>
		</nav>
		<!-- Fim do Menu Superior -->
		<!-- Inicio Container Voluntários Fisicos -->
		<div class="jumbotron jumbotron-fluid bg-with">
		  <div class="container">
			  <center>
				<h6 class="display-4">Voluntários Físicos Cadastrados!</h6>
				<hr widht="40%">
				<p class="lead">	
		  </div>
		</div> 
		<!-- Fim Container Voluntários Fisicos -->
		<!-- Inicio da Conexão com o Banco de Dados Voluntários Fisicos-->
		<?php $con=mysqli_connect("localhost","root","","fourwheels"); 
			 if (mysqli_connect_errno()) {echo "Failed to connect to MySQL: " . mysqli_connect_error();}
					$result = mysqli_query($con,"SELECT * FROM volfisico");?><p> <center>			
				<table class="table table-striped table-dark">	
					<tr><th>Id</th> 
						<th>Nome</th>
						<th>CPF</th>
						<th>Telefone</th>
						<th>Email</th>
						<th>Deletar</th>
						<th>Alterar</th>
					</tr>
						<?php while($row = mysqli_fetch_array($result)){ ?>  
					<tr><td><?php echo $row['idfisi']; ?></td>	
						<td><?php echo $row['nome']; ?></td>
						<td><?php echo $row['cpf']; ?></td>
						<td><?php echo $row['telefone']; ?></td>
						<td><?php echo $row['email']; ?></td>  
							<td><form action="excluivolf.php" method="post"><input type="hidden" name="excluifisi" value="<?php echo $row["idfisi"]; ?>"/>
									<button type="submit" class="btn btn-outline-light" name="btdel">Excluir</button>
								</form>
							</td>
						 <td><form action="formvolf.php" method="post"><input type="hidden" name="formfisi" value="<?php echo $row["idfisi"]; ?>"/>
								<button type="submit" class="btn btn-outline-light" name="btdel">Alterar</button>
							</form>
						 </td>
					</tr>
					<?php } 
					mysqli_close($con);?>	
				</table>
			<!-- Fim da Conexão com o Banco de Dados Voluntários Fisicos -->
			<!-- Inicio do Container Voluntários Jurídicos -->
			<div class="jumbotron jumbotron-fluid bg-with">
			  <div class="container">
				  <center>
					<h6 class="display-4">Voluntários Jurídicos Cadastrados!</h6>
					<hr widht="40%">
					<p class="lead">	
			  </div>
			</div> 
			<!-- Fim do Container Voluntários Juridicos -->
			<!-- Inicio da Conexão com o Banco de Dados Voluntários Jurídicos -->
			<?php $con=mysqli_connect("localhost","root","","fourwheels"); 
				 if (mysqli_connect_errno()) {echo "Failed to connect to MySQL: " . mysqli_connect_error();}
						$result = mysqli_query($con,"SELECT * FROM voljuri");?><p> <center>			
					<table class="table table-striped table-dark">	
						<tr><th>Id</th> 
							<th>Nome</th>
							<th>CNPJ</th>
							<th>Telefone</th>
							<th>Email</th>
							<th>Deletar</th>
							<th>Alterar</th>
						</tr>
							<?php while($row = mysqli_fetch_array($result)){ ?>  
						<tr><td><?php echo $row['idjuri']; ?></td>	
							<td><?php echo $row['nome']; ?></td>
							<td><?php echo $row['cnpj']; ?></td>
							<td><?php echo $row['telefone']; ?></td>
							<td><?php echo $row['email']; ?></td>  
								<td><form action="excluivolj.php" method="post"><input type="hidden" name="excluijuri" value="<?php echo $row["idjuri"]; ?>"/>
										<button type="submit" class="btn btn-outline-light" name="btdel">Excluir</button>
									</form>
								</td>
							 <td><form action="formvolj.php" method="post"><input type="hidden" name="formjuri" value="<?php echo $row["idjuri"]; ?>"/>
									<button type="submit" class="btn btn-outline-light" name="btdel">Alterar</button>
								</form>
							 </td>
						</tr>
						<?php } 
						mysqli_close($con);?>	
					</table>
				<!-- Fim da Conexão com o Banco de Dados Voluntários Jurídicos -->
				<!-- Inicio Container Serviços Cadastrados -->
				<div class="jumbotron jumbotron-fluid bg-with">
				  <div class="container">
					  <center>
						<h6 class="display-4">Serviços Cadastrados!</h6>
						<hr widht="40%">
						<p class="lead">	
				  </div>
				</div> 
				<!-- Fim Container Servicos cadastrados -->
				<!-- Inicio da Conexão com o Banco de Dados Servicos Cadastrados-->
			<?php $con=mysqli_connect("localhost","root","","fourwheels"); 
				 if (mysqli_connect_errno()) {echo "Failed to connect to MySQL: " . mysqli_connect_error();}
						$result = mysqli_query($con,"SELECT * FROM servico");?><p> <center>			
					<table class="table table-striped table-dark">	
						<tr><th>Id</th> 
							<th>Quantidade</th>
							<th>Tipo</th>
							<th>Deletar</th>
							<th>Alterar</th>
						</tr>
							<?php while($row = mysqli_fetch_array($result)){ ?>  
						<tr><td><?php echo $row['idserv']; ?></td>	
							<td><?php echo $row['qtd']; ?></td>
							<td><?php echo $row['tipo']; ?></td>
								<td><form action="excluisrv.php" method="post"><input type="hidden" name="excluisrv" value="<?php echo $row["idserv"]; ?>"/>
										<button type="submit" class="btn btn-outline-light" name="btdel">Excluir</button>
									</form>
								</td>
							 <td><form action="formsrv.php" method="post"><input type="hidden" name="formsrv" value="<?php echo $row["idserv"]; ?>"/>
									<button type="submit" class="btn btn-outline-light" name="btdel">Alterar</button>
								</form>
							 </td>
						</tr>
						<?php } 
						mysqli_close($con);?>	
					</table>
				<!-- Fim da Conexão com o Banco de Dados Servicos Cadastrados -->
				<!-- Inicio Container Peças Cadastradas -->
				<div class="jumbotron jumbotron-fluid bg-with">
				  <div class="container">
					  <center>
						<h6 class="display-4">Peças Cadastrados!</h6>
						<hr widht="40%">
						<p class="lead">	
				  </div>
				</div> 
				<!-- Fim Container Peças cadastradas -->
				<!-- Inicio da Conexão com o Banco de Dados Peças Cadastrados-->
			<?php $con=mysqli_connect("localhost","root","","fourwheels"); 
				 if (mysqli_connect_errno()) {echo "Failed to connect to MySQL: " . mysqli_connect_error();}
						$result = mysqli_query($con,"SELECT * FROM peca");?><p> <center>			
					<table class="table table-striped table-dark">	
						<tr><th>Id</th> 
							<th>Nome</th>
							<th>Descricao</th>
							<th>Deletar</th>
							<th>Alterar</th>
						</tr>
							<?php while($row = mysqli_fetch_array($result)){ ?>  
						<tr><td><?php echo $row['idpeca']; ?></td>	
							<td><?php echo $row['nome']; ?></td>
							<td><?php echo $row['descricao']; ?></td>
								<td><form action="excluipeca.php" method="post"><input type="hidden" name="excluipeca" value="<?php echo $row["idpeca"]; ?>"/>
										<button type="submit" class="btn btn-outline-light" name="btdel">Excluir</button>
									</form>
								</td>
							 <td><form action="formpeca.php" method="post"><input type="hidden" name="formpeca" value="<?php echo $row["idpeca"]; ?>"/>
									<button type="submit" class="btn btn-outline-light" name="btdel">Alterar</button>
								</form>
							 </td>
						</tr>
						<?php } 
						mysqli_close($con);?>	
					</table>
				<!-- Fim da Conexão com o Banco de Dados Pecas Cadastrados -->
		<br>
		<!-- Inicio do Rodapé -->
		<center>
		   <h1 class="display-4 ml-auto mr-auto">Navegue no Site</h1>
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