<?php	
session_start();
if(!isset($_SESSION['adm'])){
	header('location: lgadm.php');
}
	 $con=mysqli_connect("127.0.0.1","root","","fourwheels"); 
			if (mysqli_connect_errno())
			  {  echo "Failed to connect to MySQL: " . mysqli_connect_error();}			  
		$formpeca=$_POST['formpeca'];	
			$resultpeca = mysqli_query($con,"SELECT * FROM peca WHERE idpeca='$formpeca'");	
?>
<p><center>
			<form  method="POST" action="alterapeca.php">
			<center><h2>Altere os Dados da Peça Abaixo!</h2></center>
	<?php while($row = mysqli_fetch_array($resultpeca)) { ?>	
			<input type="hidden" name="formpeca" value="<?php echo $row['idpeca'];?>" />	
				<label>Nome:
				<select class="form-control" name="nome" value="<?php echo $row['nome']; ?>">
								  <option value="Shape " selected>Shape</option>
								  <option value="Truck ">Truck</option>
								  <option value="Rodas ">Rodas</option>
								  <option value="Lixas ">Lixas</option>
							  </select>
				<label for="inputpeca">Descricao</label>
							  <select class="form-control" name="descricao" value="<?php echo $row['descricao']; ?>">
								  <option value="Novo " selected>Novo</option>
								  <option value="Usado ">Usado</option>
							  </select>
				<button type="submit" name="enviar" value="ok">	Alterar	 
				</button>
			</form>
	<?php } 
	mysqli_close($con);?></p>
	