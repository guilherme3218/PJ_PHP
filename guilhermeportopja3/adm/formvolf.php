<?php	
	 $con=mysqli_connect("127.0.0.1","root","","fourwheels"); 
			if (mysqli_connect_errno())
			  {  echo "Failed to connect to MySQL: " . mysqli_connect_error();}			  
		$formfisi=$_POST['formfisi'];
          $resultfisi = mysqli_query($con,"SELECT * FROM volfisico WHERE idfisi='$formfisi'");	
?>
	<p><center>
			<form  method="POST" action="alteravol.php">
			<center><h2>Altere os Dados do Voluntario Fisico Abaixo!</h2></center>
	<?php while($row = mysqli_fetch_array($resultfisi)) { ?>	
			<input type="hidden" name="formfisi" value="<?php echo $row['idfisi'];?>" />	
				<label>Nome:<input type="text" name="nome" value="<?php echo $row['nome']; ?>"/></label><br/>
				<label>CPF:<input type="text" name="cpf" value="<?php echo $row['cpf']; ?>" /></label><br/>
				<label>Telefone:<input type="text" name="telefone" value="<?php echo $row['telefone']; ?>"/></label><br/>
				<label> Email:<input type="text" name="email" value="<?php echo $row['email']; ?>" /></label><br>
				<label> Senha:<input type="text" name="senha" value="<?php echo $row['senha']; ?>" /></label>
				<button type="submit" name="enviar" value="ok">	Alterar	
				</button>
			</form>
			<form  method="POST" action="alteravol.php">
		
	<?php } 
	mysqli_close($con);?></p>