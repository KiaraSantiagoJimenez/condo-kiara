
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


<head>
	<title>Añadir Apartamento</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="styles.css">	
</head>

<body class="maincontent">
<div class="container2">	

	<h2 class="headerUsuario" style="color: white" >Añadir Apartamento</h2>
	<hr class="break">
	
	<div class="form">
	
	
	
	
	
	<form action="insertApartamento.php" method="post" autocomplete="off">
		
		
		<div class="box">
		<label  for="NumApartamento" class="fl fontLabel">Numero:</label>
		<div class="new iconBox">
			<i class="fa-regular fa-hashtag"  aria-hidden="true"  ></i>
          </div>
		  <div class="fr">
    					<input type="text" name="NumApartamento" placeholder="Numero del Apartamento"
              class="textBox" autofocus="on" required>
    			</div>
				<div class="clr"></div>
    		</div>
		
			<div class="box">
		<label  for="NombreDueno" class="fl fontLabel">Nombre:</label>
		<div class="new iconBox">
            <i class="fa fa-user" aria-hidden="true"></i>
          </div>
		  <div class="fr">
    					<input type="text" name="NombreDueno" placeholder="Nombre del dueno"
              class="textBox" autofocus="on" required>
    			</div>
				<div class="clr"></div>
    		</div>
		
		  <div class="box">
		<label for="ApellidoDueno" class="fl fontLabel">Apellido:</label>
		<div class="fl iconBox"><i class="fa fa-user" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" required name="ApellidoDueno"
              placeholder="Apellido" class="textBox">
    			</div>
    			<div class="clr"></div>
					</div>

		  <div class="box">
		<label for="DireccionPostal" class="fl fontLabel">Postal:</label>
		<div class="fl iconBox">
		<i class="fa-solid fa-route"aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" required name="DireccionPostal"
              placeholder="Direccion Postal" class="textBox">
    			</div>
    			<div class="clr"></div>
				</div>

			<div class="box radio">
          <label for="Sexo" class="fl fontLabel"> Sexo: </label>
    				
					<input type="radio" name="Sexo" value="Femenino" required> Femenino &nbsp; &nbsp; &nbsp; &nbsp;
    				<input type="radio" name="Sexo" value="Masculino" required> Masculino
    		</div>
			
				<div class="box">
	   <label for="EmailDueno" class="fl fontLabel"> Email: </label>
				<div class="fl iconBox"><i class="fa fa-envelope" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" required name="EmailDueno" placeholder="Email" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>

			<div class="box">
          <label for="Telefono" class="fl fontLabel"> Telefono: </label>
    			<div class="fl iconBox"><i class="fa fa-phone-square" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" required name="Telefono" maxlength="12" placeholder="Telefono" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
			
		

			<div class="box">
          <label for="TelefonoAlterno" class="fl fontLabel"> Telefono2: </label>
    			<div class="fl iconBox"><i class="fa fa-phone-square" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" required name="TelefonoAlterno" maxlength="12" placeholder="Telefono Alterno" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
			
						<div class="box">
          <label for="Cuota" class="fl fontLabel"> Cuota: </label>
    			<div class="fl iconBox"><i class="fa-solid fa-file-invoice-dollar" aria-hidden="true"></i></i></div>
    			<div class="fr">
    					<input type="text" required name="Cuota"  placeholder="Cuota" class="textBox">
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


			<div class="box">
       <!--   <label for="Deuda" class="fl fontLabel"> Deuda: </label>
    			<div class="fl iconBox"><i class="fa-solid fa-money-bill"aria-hidden="true"></i></div>
    			<div class="fr">-->
    					<hidden type="text" required name="Deuda" maxlength="10" value="0" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
			
		
		
<br>
<br>
<br>
		<!--SUBMIT BUTTON-->
		  <button class="submit2" type="submit" name="save">SUBMIT</button>
				</form>
	
		</div>
	</div>
<form action="home.php">
	<button class="btn-flotante" type="volver" name="volver" >Volver</button>

<br><br></form>	
		<br>
		<br>
	</form>
	
	