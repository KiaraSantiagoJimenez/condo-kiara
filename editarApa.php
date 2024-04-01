
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

<html>
	<head>
		<title> Edit  </title>
		<meta charset="utf-8">						
		<link rel="stylesheet" href="styles.css">	
		</head>
		<body>
			<form method="post" action=""  autocomplete="off">
<br><br>
		<label>IdApartamento</label>
		<input type="text" name="IdApartamento" placeholder="IdApartamento"
               readonly
			  value="<?php echo $row['IdApartamento'] ?>"/>
			  <br><br>
		<label>Numero apartamento</label>
			<input type="text" name="NumApartamento" placeholder="NumApartamento"
			  value="<?php echo $row['NumApartamento'] ?>"/>
			  	  <br><br>
		<label>NombreDueno</label>
			<input type="text" name="NombreDueno" placeholder="NombreDueno"
			  value="<?php echo $row['NombreDueno'] ?>"/>
			  <br><br>
			  <label>ApellidoDueno</label>
			<input type="text" name="ApellidoDueno" placeholder="ApellidoDueno"
			  value="<?php echo $row['ApellidoDueno'] ?>"/>
			  <br><br>
			  <label>DireccionPostal</label>
			<input type="text" name="DireccionPostal" placeholder="DireccionPostalDueno"
			  value="<?php echo $row['DireccionPostal'] ?>"/>
			  <br><br>
			  <label>Sexo</label>
			<input type="text" name="Sexo" placeholder="Sexo"
			  value="<?php echo $row['Sexo'] ?>"/>
<br><br>			 
			 <label>EmailDueno</label>
			<input type="text" name="EmailDueno" placeholder="EmailDueno"
			  value="<?php echo $row['EmailDueno'] ?>"/>
<br><br>			 
			 <label>Telefono</label>
			<input type="text" name="Telefono" placeholder="Telefono"
			  value="<?php echo $row['Telefono'] ?>"/>
			  <br><br>
			  	 <label>TelefonoAlterno</label>
			<input type="text" name="TelefonoAlterno" placeholder="TelefonoAlterno"
			  value="<?php echo $row['TelefonoAlterno'] ?>"/>
			  <br><br>
			  	 <label>Cuota</label>
			<input type="text" name="Cuota" placeholder="Cuota"
			  value="<?php echo $row['Cuota'] ?>"/>
			  <br><br>
			  	 <label>Deuda</label>
			<input type="text" name="Deuda" placeholder="Deuda"
			  value="<?php echo $row['Deuda'] ?>"/>
			  <br><br>
			  	 <label>Comentarios</label>
			<textarea type="Comentarios"  name="Comentarios" placeholder="Comentarios" class="textBox"cols=50 rows=3> <?php echo $row['Comentarios']; ?></textarea>
			  <br><br>
			  
			  	  <input class="submit2" type="submit" name="submit" value="Submit">
				</form>
				</body>
				</html>