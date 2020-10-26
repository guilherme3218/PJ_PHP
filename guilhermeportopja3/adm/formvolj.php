<?php	
	 $con=mysqli_connect("127.0.0.1","root","","fourwheels"); 
			if (mysqli_connect_errno())
			  {  echo "Failed to connect to MySQL: " . mysqli_connect_error();}			  
		$formjuri=$_POST['formjuri'];	
			$resultjuri = mysqli_query($con,"SELECT * FROM voljuri WHERE idjuri='$formjuri'");	
?>
<p><center>
			<form  method="POST" action="alteravolj.php">
			<center><h2>Altere os Dados do Voluntario Juridico Abaixo!</h2></center>
	<?php while($row = mysqli_fetch_array($resultjuri)) { ?>	
			<input type="hidden" name="formjuri" value="<?php echo $row['idjuri'];?>" />	
				<label>Nome:<input type="text" name="nome" value="<?php echo $row['nome']; ?>"/></label><br/>
				<label>CNPJ:<input type="text" name="cnpj" value="<?php echo $row['cnpj']; ?>" /></label><br/>
				<label>Telefone:<input type="text" name="telefone" value="<?php echo $row['telefone']; ?>"/></label><br/>
				<label>Email:<input type="text" name="email" value="<?php echo $row['email']; ?>" /></label><br>
				<label>Senha:<input type="text" name="senha" value="<?php echo $row['senha']; ?>" /></label>
				<button type="submit" name="enviar" value="ok">	Alterar	
				</button>
			</form>
	<?php } 
	mysqli_close($con);?></p>