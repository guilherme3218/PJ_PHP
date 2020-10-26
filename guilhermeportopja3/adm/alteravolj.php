<?php		
     $formjuri=$_POST['formjuri'];	              
     $nome= $_POST['nome'];		
     $cnpj=$_POST['cnpj'];               
     $telefone=$_POST['telefone'];		
     $email=$_POST['email'];               
     $senha=$_POST['senha'];                		  
       $sql="update voljuri set idjuri='$formjuri',nome='$nome',cnpj='$cnpj',telefone='$telefone',email='$email',senha='$senha' where idjuri='$formjuri'";
       $con=mysqli_connect("127.0.0.1","root","","fourwheels");          		
	if (mysqli_connect_errno())	
        {  echo "Failed to connect to MySQL: ". mysqli_connect_error();}
	mysqli_query($con,$sql);
		echo "<center><h2>Voluntario Alterado com sucesso!</center></h2><p><br>";                
    mysqli_close($con);		
?> 
	<center><form method="POST" action="sadm.php">
				<input type="submit" name="altA" value="Voltar">
			</form>
	</center>