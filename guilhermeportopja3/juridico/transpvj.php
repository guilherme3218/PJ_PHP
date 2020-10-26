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
	<!-- Titulo da Página -->
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
			  <li class="nav-item">
				<a class="nav-link" href="qdvj.php">Quero Doar!</a>
			  </li>	
			  <li class="nav-item ">
				<a class="nav-link btn btn-warning" href="lgoffj.php">LOGOUT</a>
			  </li>			  
			</ul>
		</div>
	</nav>
	<!-- Fim do Menu Superior -->
	<!-- Inicio Container com o Meio da Pagina -->
	<div class="jumbotron jumbotron-fluid bg-with">
	  <div class="container">
		  <center>
			<h6 class="display-4">Sua Janela de Transparência!</h6>
			Selecione o botão que você deseja saber as informações sobre cada voluntário, tipos de serviço e peças que foram doadas.
			<hr widht="40%">
			<p class="lead">	
	  </div>
	</div> 
	<!-- Fimo Container com o Meio da Pagina -->
	<!-- Butões Acessadores das Tabelas Fícas, Jurídicas, Serviços e Peças -->
	<center>
	<h4>Voluntários</h4>
	<button type="button" class="btn btn-light bg-light" data-toggle="modal" data-target="#ModalVolFisico">
	  Voluntarios Físicos
	</button>
	<button type="button" class="btn btn-light bg-light" data-toggle="modal" data-target="#ModalVolJuridico">
	  Voluntarios Jurídicos
	</button>
	</center>
	<center>
	<h4>Serviços</h4>
	<button type="button" class="btn btn-light bg-light" data-toggle="modal" data-target="#ModalSrvDinheiro">
	  Dinheiro
	</button>
	<button type="button" class="btn btn-light bg-light" data-toggle="modal" data-target="#ModalOpRua">
	  Operarios da Rua
	</button>
	<button type="button" class="btn btn-light bg-light" data-toggle="modal" data-target="#ModalTurismo">
	  Turismo
	</button>
	<button type="button" class="btn btn-light bg-light" data-toggle="modal" data-target="#ModalVspc">
	  Voluntario de sua Propria Casa
	</button>
	</center>
	<center>
	<h4>Peças</h4>
	<button type="button" class="btn btn-light bg-light" data-toggle="modal" data-target="#ModalPut">
	  Trucks Usados
	</button>
	<button type="button" class="btn btn-light bg-light" data-toggle="modal" data-target="#ModalPnt">
	  Trucks Novos
	</button>
	</center>
	<center>
	<button type="button" class="btn btn-light bg-light" data-toggle="modal" data-target="#ModalPns">
	  Shapes Novos
	</button>
	<button type="button" class="btn btn-light bg-light" data-toggle="modal" data-target="#ModalPus">
	  Shapes Usados
	</button>
	</center>
	<center>
	<button type="button" class="btn btn-light bg-light" data-toggle="modal" data-target="#ModalPnl">
	  Lixas Novas
	</button>
	<button type="button" class="btn btn-light bg-light" data-toggle="modal" data-target="#ModalPul">
	  Lixas Usadas
	</button>
	</center>
	<center>
	<button type="button" class="btn btn-light bg-light" data-toggle="modal" data-target="#ModalPnr">
	  Rodas Novas
	</button>
	<button type="button" class="btn btn-light bg-light" data-toggle="modal" data-target="#ModalPur">
	  Rodas Usadas
	</button>
	</center>
	<!-- Fim dos Butões --> 
	<!-- Modal Voluntario Fisico -->
	<div class="modal fade" id="ModalVolFisico" tabindex="-1" role="dialog" aria-labelledby="TituloModalVolFisico" aria-hidden="true">
	  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
			   <center> <h5 class="modal-title" id="TituloModalVolFisico">Voluntarios Físicos </h5></center>
				<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <!-- Inicio da Conexão com o Banco de Dados -->
			  <div class="modal-body">
					<?php $con=mysqli_connect("localhost","root","","fourwheels"); 
					 if (mysqli_connect_errno()) {echo "Failed to connect to MySQL: " . mysqli_connect_error();}
						$result = mysqli_query($con,"SELECT count(`IDFISI`)\"Total\" FROM `volfisico`");?><p> <center>		
					<table class="table table-striped table-dark"> 		
						<tr>
							<th>Total de Voluntarios</th> 
						</tr>
						<?php while($row = mysqli_fetch_array($result)){ ?>  
						<tr>
							<td><?php echo $row['Total']; ?></td>	  
						</tr>
						<?php } 
						mysqli_close($con);?>	
					</table>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
			  </div>
			</div>
	  </div>
	</div>
	 <!-- Fim da Conexão com o Banco de Dados -->
	 
	<!-- Fim do Modal Voluntario Fisico -->
	
	<!-- Modal Voluntario Juridico -->
	<div class="modal fade" id="ModalVolJuridico" tabindex="-1" role="dialog" aria-labelledby="TituloModalVolJuridico" aria-hidden="true">
	  <div class="modal-dialog" role="document">
				<div class="modal-content">
				  <div class="modal-header">
				   <center> <h5 class="modal-title" id="TituloModalVolJuridico">Voluntarios Jurídicos </h5></center>
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				   <!-- Inicio da Conexão com o Banco de Dados -->
				  <div class="modal-body">
						<?php $con=mysqli_connect("localhost","root","","fourwheels"); 
					 if (mysqli_connect_errno()) {echo "Failed to connect to MySQL: " . mysqli_connect_error();}
						$result = mysqli_query($con,"SELECT count(`IDJURI`)\"Total\" FROM `voljuri`");?><p> <center>		
					<table class="table table-striped table-dark"> 		
						<tr>
							<th>Total de Voluntarios</th> 
						</tr>
						<?php while($row = mysqli_fetch_array($result)){ ?>  
						<tr>
							<td><?php echo $row['Total']; ?></td>	  
						</tr>
						<?php } 
						mysqli_close($con);?>	
					</table>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				  </div>
				</div>
	  </div>
	</div>
	<!-- Fim do modal Volutario Juridico --> 
	 <!-- Fim da Conexão com o Banco de Dados -->
	<!-- Modal Serviço Dinheiro -->
	<div class="modal fade" id="ModalSrvDinheiro" tabindex="-1" role="dialog" aria-labelledby="TituloModalSrvDinheiro" aria-hidden="true">
	  <div class="modal-dialog" role="document">
				<div class="modal-content">
				  <div class="modal-header">
				   <center> <h5 class="modal-title" id="TituloModalSrvDinheiro">Quantia Em Dinheiro! </h5></center>
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				   <!-- Inicio da Conexão com o Banco de Dados -->
				  <div class="modal-body">
						<?php $con=mysqli_connect("localhost","root","","fourwheels"); 
					 if (mysqli_connect_errno()) {echo "Failed to connect to MySQL: " . mysqli_connect_error();}
						$result = mysqli_query($con,"select tipo, sum(qtd) \"Total Doado\" from servico where tipo=\"Dinheiro\"");?><p> <center>		
					<table class="table table-striped table-dark"> 		
						<tr>
								<th>Doação</th> 
								<th>Quantia em Reais</th>
							</tr>
							<?php while($row = mysqli_fetch_array($result)){ ?>  
							<tr>
								<td><?php echo $row['tipo']; ?></td>
								<td><?php echo $row['Total Doado']?><td>
							</tr>
							<?php } 
						mysqli_close($con);?>	
					</table>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				  </div>
				</div>
		  </div>
	</div>
	 <!-- Fim da Conexão com o Banco de Dados -->
	 
	<!-- Fim do Modal Serviço Dinheiro -->

	<!-- Inicio Do Modal Servico Operarios da Rua -->
	<div class="modal fade" id="ModalOpRua" tabindex="-1" role="dialog" aria-labelledby="TituloModalOpRua" aria-hidden="true">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
			   <center> <h5 class="modal-title" id="TituloModalOpRua">Operarios da Rua! </h5></center>
				<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			   <!-- Inicio da Conexão com o Banco de Dados -->
			  <div class="modal-body">
					<?php $con=mysqli_connect("localhost","root","","fourwheels"); 
				 if (mysqli_connect_errno()) {echo "Failed to connect to MySQL: " . mysqli_connect_error();}
					$result = mysqli_query($con,"select tipo, sum(qtd) \"Total de Servicos\" from servico where tipo=\"Operarios de Rua\"");?><p> <center>		
				<table class="table table-striped table-dark"> 		
					<tr>
						<th>Doação</th> 
						<th>Total de Serviços</th>
					</tr>
					<?php while($row = mysqli_fetch_array($result)){ ?>  
					<tr>
						<td><?php echo $row['tipo']; ?></td>
						<td><?php echo $row['Total de Servicos']?><td>
					</tr>
					<?php } 
					mysqli_close($con);?>	
				</table>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
			  </div>
			</div>
		  </div>
	</div>
	 <!-- Fim da Conexão com o Banco de Dados -->
	<!-- Fim do Modal Servico Operarios de Rua -->

	<!-- Inicio Do Modal Servico Turismo Social -->
	<div class="modal fade" id="ModalTurismo" tabindex="-1" role="dialog" aria-labelledby="TituloModalTurismo" aria-hidden="true">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
			   <center> <h5 class="modal-title" id="TituloModalTurismo">Turismo Social! </h5></center>
				<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			   <!-- Inicio da Conexão com o Banco de Dados -->
			  <div class="modal-body">
					<?php $con=mysqli_connect("localhost","root","","fourwheels"); 
				 if (mysqli_connect_errno()) {echo "Failed to connect to MySQL: " . mysqli_connect_error();}
					$result = mysqli_query($con,"select tipo, sum(qtd) \"Total de Servicos\" from servico where tipo=\"Turismo\"");?><p> <center>		
				<table class="table table-striped table-dark"> 		
						<tr>
							<th>Doação</th> 
							<th>Total de Serviços</th>
						</tr>
						<?php while($row = mysqli_fetch_array($result)){ ?>  
						<tr>
							<td><?php echo $row['tipo']; ?></td>
							<td><?php echo $row['Total de Servicos']?><td>
						</tr>
						<?php } 
						mysqli_close($con);?>	
				</table>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
			  </div>
			</div>
		  </div>
	</div>
	 <!-- Fim da Conexão com o Banco de Dados -->
	<!-- Fim do Modal Servico Turismo -->

	<!-- Inicio Do Modal Servico Voluntario de sua Casa -->
	<div class="modal fade" id="ModalVspc" tabindex="-1" role="dialog" aria-labelledby="TituloModalVspc" aria-hidden="true">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
			   <center> <h5 class="modal-title" id="TituloModalVspc">Voluntario de sua propria Casa! </h5></center>
				<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			   <!-- Inicio da Conexão com o Banco de Dados -->
			  <div class="modal-body">
					<?php $con=mysqli_connect("localhost","root","","fourwheels"); 
				 if (mysqli_connect_errno()) {echo "Failed to connect to MySQL: " . mysqli_connect_error();}
					$result = mysqli_query($con,"select tipo, sum(qtd) \"Total de Servicos\" from servico where tipo=\"Voluntario de Sua propria casa\"");?><p> <center>		
				<table class="table table-striped table-dark"> 		
						<tr>
							<th>Doação</th> 
							<th>Total de Serviços</th>
						</tr>
						<?php while($row = mysqli_fetch_array($result)){ ?>  
						<tr>
							<td><?php echo $row['tipo']; ?></td>
							<td><?php echo $row['Total de Servicos']?><td>
						</tr>
						<?php } 
						mysqli_close($con);?>	
				</table>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
			  </div>
			</div>
		  </div>
	</div>
    <!--  Fim da Conexão com o Banco de Dados -->
	<!-- Fim do modal Servico Voluntario de sua propria casa -->

	<!-- Todo o Modal de Peças Usadas e Novas -->

	<!-- Inicio Do Modal Peças Truck Usados -->
	<div class="modal fade" id="ModalPut" tabindex="-1" role="dialog" aria-labelledby="TituloModalPut" aria-hidden="true">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
				  <div class="modal-header">
				   <center> <h5 class="modal-title" id="TituloModalPut">Peças Usadas! </h5></center>
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				  <div class="modal-body">
						<?php $con=mysqli_connect("localhost","root","","fourwheels"); 
					 if (mysqli_connect_errno()) {echo "Failed to connect to MySQL: " . mysqli_connect_error();}
						$result = mysqli_query($con,"select nome, count(idpeca) \"Usados\"from peca where descricao=\"usado\" and nome=\"Truck\"");?><p> <center>		
					<table class="table table-striped table-dark"> 		
							<tr>
								<th>Doação</th> 
								<th>Total de Peças</th>
							</tr>
							<?php while($row = mysqli_fetch_array($result)){ ?>  
							<tr>
								<td><?php echo $row['nome']; ?></td>
								<td><?php echo $row['Usados']?><td>
							</tr>
							<?php } 
						mysqli_close($con);?>	
					</table>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				  </div>
			</div>
		  </div>
	</div>
	 <!-- Fim da Conexão com o Banco de Dados -->
	<!-- Fim do modal Peças Truck Usados -->

	<!-- Inicio Do Modal Peças Truck Novas -->
	<div class="modal fade" id="ModalPnt" tabindex="-1" role="dialog" aria-labelledby="TituloModalPnt" aria-hidden="true">
		  <div class="modal-dialog" role="document">
				<div class="modal-content">
				  <div class="modal-header">
				   <center> <h5 class="modal-title" id="TituloModalPnt">Peças Novas! </h5></center>
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				   <!-- Inicio da Conexão com o Banco de Dados -->
				  <div class="modal-body">
						<?php $con=mysqli_connect("localhost","root","","fourwheels"); 
					 if (mysqli_connect_errno()) {echo "Failed to connect to MySQL: " . mysqli_connect_error();}
						$result = mysqli_query($con,"select nome, count(idpeca) \"Novas\"from peca where descricao=\"novo\" and nome=\"Truck\"");?><p> <center>		
					<table class="table table-striped table-dark"> 		
							<tr>
								<th>Doação</th> 
								<th>Total de Peças</th>
							</tr>
							<?php while($row = mysqli_fetch_array($result)){ ?>  
							<tr>
								<td><?php echo $row['nome']; ?></td>
								<td><?php echo $row['Novas']?><td>
							</tr>
							<?php } 
							mysqli_close($con);?>	
					</table>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				  </div>
				</div>
		  </div>
	</div>
	 <!-- Fim da Conexão com o Banco de Dados -->
	<!-- Fim do modal Peças Truck Novas -->

	<!-- Inicio Do Modal Peças Shapes Usados -->
	<div class="modal fade" id="ModalPus" tabindex="-1" role="dialog" aria-labelledby="TituloModalPus" aria-hidden="true">
		  <div class="modal-dialog" role="document">
				<div class="modal-content">
				  <div class="modal-header">
				   <center> <h5 class="modal-title" id="TituloModalPus">Peças Usadas! </h5></center>
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				   <!-- Inicio da Conexão com o Banco de Dados -->
				  <div class="modal-body">
						<?php $con=mysqli_connect("localhost","root","","fourwheels"); 
					 if (mysqli_connect_errno()) {echo "Failed to connect to MySQL: " . mysqli_connect_error();}
						$result = mysqli_query($con,"select nome, count(idpeca) \"Usados\"from peca where descricao=\"usado\" and nome=\"Shape\"");?><p> <center>		
					<table class="table table-striped table-dark"> 		
							<tr>
								<th>Doação</th> 
								<th>Total de Peças</th>
							</tr>
							<?php while($row = mysqli_fetch_array($result)){ ?>  
							<tr>
								<td><?php echo $row['nome']; ?></td>
								<td><?php echo $row['Usados']?><td>
							</tr>
							<?php } 
							mysqli_close($con);?>	
					</table>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				  </div>
				</div>
		  </div>
	</div>
	<!-- Fim da Conexão com o Banco de Dados -->
	<!-- Fim do modal Peças Shapes Usados -->

	<!-- Inicio Do Modal Peças Shapes Novos -->
	<div class="modal fade" id="ModalPns" tabindex="-1" role="dialog" aria-labelledby="TituloModalPns" aria-hidden="true">
		  <div class="modal-dialog" role="document">
				<div class="modal-content">
				  <div class="modal-header">
				   <center> <h5 class="modal-title" id="TituloModalPns">Peças Novas! </h5></center>
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				   <!-- Inicio da Conexão com o Banco de Dados -->
				  <div class="modal-body">
						<?php $con=mysqli_connect("localhost","root","","fourwheels"); 
					 if (mysqli_connect_errno()) {echo "Failed to connect to MySQL: " . mysqli_connect_error();}
						$result = mysqli_query($con,"select nome, count(idpeca) \"Novas\"from peca where descricao=\"novo\" and nome=\"Shape\"");?><p> <center>		
					<table class="table table-striped table-dark"> 		
							<tr>
								<th>Doação</th> 
								<th>Total de Peças</th>
							</tr>
							<?php while($row = mysqli_fetch_array($result)){ ?>  
							<tr>
								<td><?php echo $row['nome']; ?></td>
								<td><?php echo $row['Novas']?><td>
							</tr>
							<?php } 
							mysqli_close($con);?>	
					</table>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				  </div>
				</div>
		  </div>
	</div>
	 <!-- Fim da Conexão com o Banco de Dados -->
	 <!-- Fim da Conexão com o Banco de Dados -->
	<!-- Fim do modal Peças Shapes Novos -->

	<!-- Texto na metade da página -->

	<!-- Inicio Do Modal Peças Lixas Usadas -->
	<div class="modal fade" id="ModalPul" tabindex="-1" role="dialog" aria-labelledby="TituloModalPul" aria-hidden="true">
		  <div class="modal-dialog" role="document">
				<div class="modal-content">
				  <div class="modal-header">
				   <center> <h5 class="modal-title" id="TituloModalPul">Peças Usadas! </h5></center>
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				   <!-- Inicio da Conexão com o Banco de Dados -->
				  <div class="modal-body">
						<?php $con=mysqli_connect("localhost","root","","fourwheels"); 
					 if (mysqli_connect_errno()) {echo "Failed to connect to MySQL: " . mysqli_connect_error();}
						$result = mysqli_query($con,"select nome, count(idpeca) \"Usados\"from peca where descricao=\"usado\" and nome=\"Lixa\"");?><p> <center>		
					<table class="table table-striped table-dark"> 		
							<tr>
								<th>Doação</th> 
								<th>Total de Peças</th>
							</tr>
							<?php while($row = mysqli_fetch_array($result)){ ?>  
							<tr>
								<td><?php echo $row['nome']; ?></td>
								<td><?php echo $row['Usados']?><td>
							</tr>
							<?php } 
							mysqli_close($con);?>	
					</table>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				  </div>
				</div>
		  </div>
	</div>
	 <!-- Fim da Conexão com o Banco de Dados -->
	<!-- Fim do modal Peças Lixas Usadas -->

	<!-- Inicio Do Modal Peças Lixas Novas -->
	<div class="modal fade" id="ModalPnl" tabindex="-1" role="dialog" aria-labelledby="TituloModalPnl" aria-hidden="true">
		  <div class="modal-dialog" role="document">
				<div class="modal-content">
				  <div class="modal-header">
				   <center> <h5 class="modal-title" id="TituloModalPnl">Peças Novas! </h5></center>
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				   <!-- Inicio da Conexão com o Banco de Dados -->
				  <div class="modal-body">
						<?php $con=mysqli_connect("localhost","root","","fourwheels"); 
					 if (mysqli_connect_errno()) {echo "Failed to connect to MySQL: " . mysqli_connect_error();}
						$result = mysqli_query($con,"select nome, count(idpeca) \"Novas\"from peca where descricao=\"novo\" and nome=\"Lixa\"");?><p> <center>		
					<table class="table table-striped table-dark"> 		
							<tr>
								<th>Doação</th> 
								<th>Total de Peças</th>
							</tr>
							<?php while($row = mysqli_fetch_array($result)){ ?>  
							<tr>
								<td><?php echo $row['nome']; ?></td>
								<td><?php echo $row['Novas']?><td>
							</tr>
							<?php } 
							mysqli_close($con);?>	
					</table>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				  </div>
				</div>
		  </div>
	</div>
	 <!-- Fim da Conexão com o Banco de Dados -->
	<!-- Fim do modal Peças Lixas Novas -->

	<!-- Inicio Do Modal Peças Rodas Usadas -->
	<div class="modal fade" id="ModalPur" tabindex="-1" role="dialog" aria-labelledby="TituloModalPur" aria-hidden="true">
		  <div class="modal-dialog" role="document">
				<div class="modal-content">
				  <div class="modal-header">
				   <center> <h5 class="modal-title" id="TituloModalPur">Peças Usadas! </h5></center>
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				   <!-- Inicio da Conexão com o Banco de Dados -->
				  <div class="modal-body">
						<?php $con=mysqli_connect("localhost","root","","fourwheels"); 
					 if (mysqli_connect_errno()) {echo "Failed to connect to MySQL: " . mysqli_connect_error();}
						$result = mysqli_query($con,"select nome, count(idpeca) \"Usados\"from peca where descricao=\"usado\" and nome=\"Rodas\"");?><p> <center>		
					<table class="table table-striped table-dark"> 		
							<tr>
								<th>Doação</th> 
								<th>Total de Peças</th>
							</tr>
							<?php while($row = mysqli_fetch_array($result)){ ?>  
							<tr>
								<td><?php echo $row['nome']; ?></td>
								<td><?php echo $row['Usados']?><td>
							</tr>
							<?php } 
							mysqli_close($con);?>	
					</table>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				  </div>
				</div>
		  </div>
	</div>
	 <!-- Fim da Conexão com o Banco de Dados -->
	<!-- Fim do modal Peças Rodas Usadas -->

	<!-- Inicio Do Modal Peças Rodas Novas -->
	<div class="modal fade" id="ModalPnr" tabindex="-1" role="dialog" aria-labelledby="TituloModalPnr" aria-hidden="true">
		  <div class="modal-dialog" role="document">
				<div class="modal-content">
				  <div class="modal-header">
				   <center> <h5 class="modal-title" id="TituloModalPnr">Peças Novas! </h5></center>
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				   <!-- Inicio da Conexão com o Banco de Dados -->
				  <div class="modal-body">
						<?php $con=mysqli_connect("localhost","root","","fourwheels"); 
					 if (mysqli_connect_errno()) {echo "Failed to connect to MySQL: " . mysqli_connect_error();}
						$result = mysqli_query($con,"select nome, count(idpeca) \"Novas\"from peca where descricao=\"novo\" and nome=\"Rodas\"");?><p> <center>		
					<table class="table table-striped table-dark"> 		
							<tr>
								<th>Doação</th> 
								<th>Total de Peças</th>
							</tr>
							<?php while($row = mysqli_fetch_array($result)){ ?>  
							<tr>
								<td><?php echo $row['nome']; ?></td>
								<td><?php echo $row['Novas']?><td>
							</tr>
							<?php } 
							mysqli_close($con);?>	
					</table>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				  </div>
				</div>
		  </div>
	</div>
	 <!-- Fim da Conexão com o Banco de Dados -->
	<!-- Fim do modal Peças Rodas Novas -->


	<!-- Fim de todo o Modal -->

	<center>
	   <h1 class="display-4 ml-auto mr-auto"></h1>
	   <hr width="40%">
		 </center>
	<br>
	<br>
	<!-- Fim da metade do texto da página -->
	<!-- Inicio Rodapé --> 
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
	<!-- Fim do rodapé -->

	   <!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	  </body>
</html>
   
   
	