<?php	
session_start();
if(!isset($_SESSION['adm'])){
	header('location: lgadm.php');
}
          $con=mysqli_connect("127.0.0.1","root","","fourwheels"); 
	    if (mysqli_connect_errno())
	      {  echo "Failed to connect to MySQL: " . mysqli_connect_error();}	
		  $excluisrv=$_POST['excluisrv'];	
          $exjuri = mysqli_query($con,"delete from servico WHERE idserv='$excluisrv'");	
		  
			echo "<center><h2>Serviço Excluido com sucesso!</center></h2><p><br>";                
			mysqli_close($con);		
?> 
	<center><form method="POST" action="sadm.php">
				<input type="submit" name="delA" value="Voltar">
			</form>
	</center>	