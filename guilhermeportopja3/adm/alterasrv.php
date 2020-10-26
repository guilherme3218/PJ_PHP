<?php	
session_start();
if(!isset($_SESSION['adm'])){
	header('location: lgadm.php');
}	
     $formsrv=$_POST['formsrv'];	              
     $qtd= $_POST['qtd'];		
     $tipo=$_POST['tipo'];                       		  
       $sql="update servico set idserv='$formsrv',qtd='$qtd',tipo='$tipo' where idserv='$formsrv'";
       $con=mysqli_connect("127.0.0.1","root","","fourwheels");          		
	if (mysqli_connect_errno())	
        {  echo "Failed to connect to MySQL: ". mysqli_connect_error();}
	mysqli_query($con,$sql);
		echo "<center><h2>Serviço Alterado com sucesso!</center></h2><p><br>";                
    mysqli_close($con);		
?> 
	<center><form method="POST" action="sadm.php">
				<input type="submit" name="altA" value="Voltar">
			</form>
	</center>