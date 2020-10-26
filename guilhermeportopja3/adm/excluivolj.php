<?php	
          $con=mysqli_connect("127.0.0.1","root","","fourwheels"); 
	    if (mysqli_connect_errno())
	      {  echo "Failed to connect to MySQL: " . mysqli_connect_error();}	
		  $excluijuri=$_POST['excluijuri'];	
          $exjuri = mysqli_query($con,"delete from voljuri WHERE idjuri='$excluijuri'");	
		  
			echo "<center><h2>Voluntario Excluido com sucesso!</center></h2><p><br>";                
			mysqli_close($con);		
?> 
	<center><form method="POST" action="sadm.php">
				<input type="submit" name="delA" value="Voltar">
			</form>
	</center>	