<?php	
session_start();
if(!isset($_SESSION['adm'])){
	header('location: lgadm.php');
}
	 $con=mysqli_connect("127.0.0.1","root","","fourwheels"); 
			if (mysqli_connect_errno())
			  {  echo "Failed to connect to MySQL: " . mysqli_connect_error();}			  
		$formsrv=$_POST['formsrv'];	
			$resultsrv = mysqli_query($con,"SELECT * FROM servico WHERE idserv='$formsrv'");	
?>
<p><center>
			<form  method="POST" action="alterasrv.php">
			<center><h2>Altere os Dados do Voluntario Juridico Abaixo!</h2></center>
	<?php while($row = mysqli_fetch_array($resultsrv)) { ?>	
			<input type="hidden" name="formsrv" value="<?php echo $row['idserv'];?>" />	
				<label>Quantidade:<input type="text" name="qtd" value="<?php echo $row['qtd']; ?>"/></label><br/>
				<label for="inputSrv">Tipo de Serviço</label>
							  <select class="form-control" name="tipo" value="<?php echo $row['tipo']; ?>">
								  <option value="Dinheiro " selected>Dinheiro</option>
								  <option value="Operarios de Rua ">Operarios da Rua</option>
								  <option value="Turismo ">Turismo Social</option>
								  <option value="Voluntario de Sua propria casa ">Voluntario de Sua propria casa</option>
							  </select>
				<button type="submit" name="enviar" value="ok">	Alterar	
				</button>
			</form>
	<?php } 
	mysqli_close($con);?></p>