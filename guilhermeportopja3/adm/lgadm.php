<?php
 $con=mysqli_connect("localhost","root","","fourwheels"); 
		 if (mysqli_connect_errno()) {echo "Failed to connect to MySQL: " . mysqli_connect_error();}

	session_start();
	if(isset($_POST["email"])) {
		$email=$_POST["email"];
		$senha=$_POST["senha"];
	$login="select*from admweb where email='$email' and senha='$senha'";
	
	$aces= mysqli_query($con,$login);
	
	if(!$aces){
		echo"Não deu Certo!";
	}
	$info=mysqli_fetch_assoc($aces);
		if(empty($info)){
			$msg="Senha Inválida/Email Inválido!";
			}		
		else{
			$_SESSION['adm']=$info["idadm"];
			header("location: sadm.php");		
		}	
	}
	
?>
<html xmlns="http://www.w3.org/1999/xhtml">
 
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Login</title>
    <!-- Abaixo um código que "chama" a folha de estilos que é responsável pelo tipo de fonte, localização do formulário...  -->
        <link href="admin.css" rel="stylesheet" type="text/css">
    </head>
        <body>
            <div id=form2>
                <!-- A partir do método post é chamado a ação de "verificação no banco de dados" no arquivo "verifica.php"-->
                <form method="POST" action="lgadm.php">
                    <!-- Indica o início do formulário-->
                    <fieldset >
                        <legend align="center">Preencha os campos para efetuar o login de Administrador:</legend>
                        <label align="center"; for="login">Usuário:</label>
                        <br />
                        <input type="text" name="email" id="login" size="20"
                        maxlength="20" />
                        <br />
                        <label for="senha">Senha:</label>
                        <br />
                        <input type="password" name="senha" id="senha" size="20"
                        maxlength="20" />
                        <br />
                        <input type="submit" value="Efetuar Login" />
                    <!--Indica o fim do formulário -->
                    </fieldset>
                </form>
            </div>
        </body>
</html>