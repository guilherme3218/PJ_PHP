<?php		
     $formfisi=$_POST['formfisi'];	              
     $nome= $_POST['nome'];		
     $cpf=$_POST['cpf'];               
     $telefone=$_POST['telefone'];		
     $email=$_POST['email'];               
     $senha=$_POST['senha'];                		  
       $sqlfisi="update volfisico set idfisi='$formfisi',nome='$nome',cpf='$cpf',telefone='$telefone',email='$email',senha='$senha' where idfisi='$formfisi'";
       $con=mysqli_connect("127.0.0.1","root","","fourwheels");          		
	if (mysqli_connect_errno())	
        {  echo "Failed to connect to MySQL: ". mysqli_connect_error();}
	mysqli_query($con,$sqlfisi);
		echo "<center><h2>Voluntario Alterado com sucesso!</center></h2><p><br>";                
    mysqli_close($con);		
?> 
	<center><form method="POST" action="sadm.php">
				<input type="submit" name="altA" value="Voltar">
			</form>
	</center>