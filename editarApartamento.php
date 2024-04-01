<?php
    include("dbconnect.php");
    session_start();
    if(!isset($_SESSION['admin'])) {
        header("Location:index.php");
    }
?>
<?php
 include 'dbconnect.php';
	if (count($_POST) > 0) {
	
	mysqli_query($db,"UPDATE `apartamentos` set IdApartamento='" . $_POST['IdApartamento'] . "', NumApartamento='" . $_POST['NumApartamento'] . "', NombreDueno='" . $_POST['NombreDueno'] . "', ApellidoDueno='" . $_POST['ApellidoDueno'] . "', DireccionPostal='" . $_POST['DireccionPostal'] . "', Sexo='" . $_POST['Sexo'] . "', EmailDueno='" . $_POST['EmailDueno'] . "', Telefono='" . $_POST['Telefono'] . "', TelefonoAlterno='" . $_POST['TelefonoAlterno'] . "', Cuota='" . $_POST['Cuota'] . "', Deuda='" . $_POST['Deuda'] . "', Comentarios='" . $_POST['Comentarios'] . "' WHERE IdApartamento='" . $_POST['IdApartamento'] . "'");	

	echo '<script>alert("Informacion Editada Exitosamente!");</script>';
		// Prompts the user_error
	echo '<script>window.location.assign("VerApartamentos.php");</script>';
	}
	
	$result = mysqli_query($db,"SELECT * FROM `apartamentos` WHERE IdApartamento='" . $_GET['IdApartamento'] . "'");
	$row=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<?php
include('adminheader.php')

?>
<html>
<head>
	<title>Editar Apartamento</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="styles.css">	
</head>

<body class="maincontent">
<div class="container2">	

	<h2 class="headerUsuario" style="color: white" >Editar Apartamento</h2>
	<hr class="break">
	
	<div class="form">
	
	
	
	
	
	<form method="post" action=""  autocomplete="off">
		
		<div class="box">
		<label  for="IdApartamento" class="fl fontLabel">ID:</label>
		<div class="new iconBox">
			<i class="fa-regular fa-hashtag"  aria-hidden="true"  ></i>
          </div>
		  <div class="fr">
    					<input type="text" name="IdApartamento" placeholder="IdApartamento"
              class="textBox" autofocus="on" readonly value="<?php echo $row['IdApartamento']; ?>">
    			</div>
				<div class="clr"></div>
    		</div>
		
		<div class="box">
		<label  for="NumApartamento" class="fl fontLabel">Numero:</label>
		<div class="new iconBox">
			<i class="fa-regular fa-hashtag"  aria-hidden="true"  ></i>
          </div>
		  <div class="fr">
    					<input type="text" name="NumApartamento" placeholder="Numero del Apartamento"
              class="textBox" autofocus="on" value="<?php echo $row['NumApartamento']; ?>">
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
              class="textBox" autofocus="on" value="<?php echo $row['NombreDueno']; ?>">
    			</div>
				<div class="clr"></div>
    		</div>
		
		  <div class="box">
		<label for="ApellidoDueno" class="fl fontLabel">Apellido:</label>
		<div class="fl iconBox"><i class="fa fa-user" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" required name="ApellidoDueno"
              placeholder="Apellido" class="textBox" value="<?php echo $row['ApellidoDueno']; ?>">
    			</div>
    			<div class="clr"></div>
					</div>

		  <div class="box">
		<label  class="fl fontLabel">Postal:</label>
		<div class="fl iconBox">
		<i class="fa-solid fa-route"aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" required name="DireccionPostal"
              placeholder="Direccion Postal" class="textBox" value="<?php echo $row['DireccionPostal']; ?>">
    			</div>
    			<div class="clr"></div>
				</div>

			<div class="box">
	   <label for="Sexo" class="fl fontLabel"> Sexo: </label>
				<div class="fl iconBox"><i class="fa fa-envelope" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" required name="Sexo" placeholder="Sexo" class="textBox" value="<?php echo $row['Sexo']; ?>">
    			</div>
    			<div class="clr"></div>
    		</div>
			
				<div class="box">
	   <label for="EmailDueno" class="fl fontLabel"> Email: </label>
				<div class="fl iconBox"><i class="fa fa-envelope" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" required name="EmailDueno" placeholder="Email" class="textBox" value="<?php echo $row['EmailDueno']; ?>">
    			</div>
    			<div class="clr"></div>
    		</div>

			<div class="box">
          <label for="Telefono" class="fl fontLabel"> Telefono: </label>
    			<div class="fl iconBox"><i class="fa fa-phone-square" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" required name="Telefono" maxlength="12" placeholder="Telefono" class="textBox" value="<?php echo $row['Telefono']; ?>">
    			</div>
    			<div class="clr"></div>
    		</div>
			
		

			<div class="box">
          <label for="TelefonoAlterno" class="fl fontLabel"> Telefono 2: </label>
    			<div class="fl iconBox"><i class="fa fa-phone-square" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" required name="TelefonoAlterno" maxlength="12" placeholder="Telefono Alterno" class="textBox" value="<?php echo $row['TelefonoAlterno']; ?>">
    			</div>
    			<div class="clr"></div>
    		</div>
			
						<div class="box">
          <label for="Cuota" class="fl fontLabel"> Cuota: </label>
    			<div class="fl iconBox"><i class="fa-solid fa-file-invoice-dollar" aria-hidden="true"></i></i></div>
    			<div class="fr">
    					<input type="text" required name="Cuota"  placeholder="Cuota" class="textBox" value="<?php echo $row['Cuota'] ?>">
    			</div>
    			<div class="clr"></div>
    		</div>
			
				<div class="box">
          <label for="Comentarios" class="fl fontLabel"> Comentarios: </label>
    			<div class="fl iconBox"><i class="fa-solid fa-pen" aria-hidden="true"></i></div>
    			<div class="fr">
    					<textarea type="Comentarios"  name="Comentarios" placeholder="Comentarios" style=" font-size:20px;font-family:Calibri;"cols=30 rows=3><?php echo $row['Comentarios']; ?></textarea>
    			</div>
    			<div class="clr"></div>
    		</div>

			<div class="box">
        <!--  <label for="Deuda" class="fl fontLabel"> Deuda: </label>
    			<div class="fl iconBox"><i class="fa-solid fa-money-bill"aria-hidden="true"></i></div>
    			<div class="fr"> -->
    					<hidden type="text" readonly name="Deuda"  placeholder="Deuda" class="textBox" value="<?php echo $row['Deuda']; ?>" readonly>
    			</div>
    			<div class="clr"></div>
    		</div>
			
			

		
<br>
<br>
		<!--SUBMIT BUTTON-->
		  <input class="submit2" type="submit" name="submit" value="submit">
				</form>
	
		</div>
	</div>	
		<form action="verApartamentos.php">
	<button class="btn-flotante" type="volver" name="volver" >Volver</button>

</form>
		<br>
		<br>
	</form>
	
	