<?php	
session_start();
if(!isset($_SESSION['adm'])){
	header('location: lgadm.php');
}	
     $formpeca=$_POST['formpeca'];	              
     $nome= $_POST['nome'];		
     $descricao=$_POST['descricao'];                       		  
       $sql="update peca set idpeca='$formpeca',nome='$nome',descricao='$descricao' where idpeca='$formpeca'";
       $con=mysqli_connect("127.0.0.1","root","","fourwheels");          		
	if (mysqli_connect_errno())	
        {  echo "Failed to connect to MySQL: ". mysqli_connect_error();}
	mysqli_query($con,$sql);
		echo "<center><h2>Peça Alterado com sucesso!</center></h2><p><br>";                
    mysqli_close($con);		
?> 
	<center><form method="POST" action="sadm.php">
				<input type="submit" name="altA" value="Voltar">
			</form>
	</center>