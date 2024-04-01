
<?php
    include("dbconnect.php");
    session_start();
    if(!isset($_SESSION['admin'])) {
        header("Location:index.php");
    }
?>
<!DOCTYPE html>
<?php
include('adminheader.php')

?>
<html>
<body>
<head>
	<title >Añadir Usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="styles.css">	
</head>
<body class="maincontent">
<div class="container">
<h3 class="headerUsuario" style="color: white">Añadir Usuario</h3>


	



	

	<div class="form">
	
		
	<form action="insertUsuario.php" method="post" autocomplete="off">
	
	
	<div class="box">
		<label  for="NombreUsuario" class="fl fontLabel">Nombre:</label>
		<div class="new iconBox">
            <i class="fa fa-user" aria-hidden="true"></i>
          </div>
		  <div class="fr">
    					<input type="text" name="NombreUsuario" placeholder="Nombre"
              class="textBox" autofocus="on" required>
    			</div>
				<div class="clr"></div>
    		</div>
		  
		  
		  
		   
		  <div class="box">
		<label for="ApellidoUsuario" class="fl fontLabel">Apellido:</label>
		<div class="fl iconBox"><i class="fa fa-user" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" required name="ApellidoUsuario"
              placeholder="Apellido" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>

		
		<div class="box">
	   <label for="email" class="fl fontLabel"> Email: </label>
				<div class="fl iconBox"><i class="fa fa-envelope" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" required name="EmailUsuario" placeholder="Email" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>

		
		
			<div class="box radio">
          <label for="Sexo" class="fl fontLabel"> Sexo: </label>
    				<input type="radio" name="Sexo" value="Femenino" required> Femenino &nbsp; &nbsp; &nbsp; &nbsp;
    				<input type="radio" name="Sexo" value="Masculino" required> Masculino
    		</div>
		
		
			<div class="box">
          <label for="TelefonoUsuario" class="fl fontLabel"> Telefono: </label>
    			<div class="fl iconBox"><i class="fa fa-phone-square" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" required name="TelefonoUsuario" maxlength="12" placeholder="Telefono" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
			
		

			<div class="box">
          <label for="TelefonoAlternoUsuario" class="fl fontLabel"> Telefono 2: </label>
    			<div class="fl iconBox"><i class="fa fa-phone-square" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" required name="TelefonoAlternoUsuario" maxlength="12" placeholder="Telefono Alterno" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
		
			
				<div class="box">
		<label  for="Username" class="fl fontLabel">Username:</label>
		<div class="new iconBox">
            <i class="fa fa-user" aria-hidden="true"></i>
          </div>
		  <div class="fr">
    					<input type="text" name="Username" placeholder="Username"
              class="textBox" autofocus="on" required>
    			</div>
				<div class="clr"></div>
    		</div>
		

			<div class="box">
          <label for="Password" class="fl fontLabel"> Password: </label>
    			<div class="fl iconBox"><i class="fa fa-key" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="Password" required name="Password" placeholder="Password" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
		
			
				<div class="box">
          <label for="Comentarios" class="fl fontLabel"> Comentarios: </label>
    			<div class="fl iconBox"><i class="fa-solid fa-pen" aria-hidden="true"></i></div>
    			<div class="fr">
    					<textarea type="Comentarios"  name="Comentarios" placeholder="Comentarios" style=" font-size:20px;font-family:Calibri;"cols=30 rows=3></textarea>
    			</div>
    			<div class="clr"></div>
    		</div>

		

		
<br>
<br>
<br>
		
		  <button class="submit" type="submit" name="save">SUBMIT</button>
		
		<br>
		<br>
	</form>
	
</div>

</div>
<form action="home.php">
	<button class="btn-flotante" type="volver" name="volver" >Volver</button>

<br><br></form>	
</body>
</html>	