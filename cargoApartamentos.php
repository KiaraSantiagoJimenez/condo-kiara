

<?php
    include("dbconnect.php");
    session_start();
    if(!isset($_SESSION['admin'])) {
        header("Location:index.php");
    }
?>

<?php
include'dbconnect.php';
$result = mysqli_query($db,"SELECT * FROM apartamentos");
?>
<?php
		if (count($_POST) > 0) {
			mysqli_query($db, "UPDATE `apartamentos` SET Deuda= Deuda + Cuota ");

		echo '<script>alert("Cuota entrada Exitosamente!");</script>';
		// Prompts the user_error
	echo '<script>window.location.assign("VerTransacciones.php");</script>';
	}

?>
<?php
include'dbconnect.php';
$result = mysqli_query($db,"SELECT * FROM apartamentos");
?>
<?php
	
  
	
	if (count($_POST) > 0) {
		
		$i=1;
while($row = mysqli_fetch_array($result)){
		$apartamentos= $row["NumApartamento"];
	$cuotas = $row["Cuota"];
	$sql = "INSERT INTO transacciones (`NumApartamento`, `Fecha`,`Concepto`,`Descripcion`,`Cantidad`,`MetodoPago`) VALUES ('$apartamentos','".$_POST['Fecha']."','Cuota','".$_POST['Descripcion']."','$cuotas','N/A')";
	
	
		if (mysqli_query($db, $sql)) 
		{
			echo '<script>alert("Funciona")</script>';
		}	 
		else 
		{
			echo '<script>alert("Error transacciones: " . mysqli_error($db)!");</script>';
		}
		
		
		$i++;
	}
	mysqli_close($db);
	}
	
	

?>
<!DOCTYPE html>
	<?php
include('adminheader.php')

?>

<?php
include ("dbconnect.php");

?>

<html>
<head>
<title >Cuota Mensual</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="styles.css">	
</head>

<body class="maincontent">
<div class="container3">	
	<h2 class="headerUsuario" style="color: white"> Agregar Cuota Mensual</h2>
<hr class="break">
<br><br>
	<div class="form">
			
	<form action="" method="post" autocomplete="off">
	
	<label  style="color: white; font-size:20px;"> Esta cuota se le incluira a todos los apartamentos que esten registrados en el momento de hacer la transaccion. Se le sumara la cuota asignada a cada apartamento a la deuda de cada apartamento. </label> 
	<br><br>
			<div class="box">
		<label  for="Fecha" class="fl fontLabel">Fecha:</label>
		<div class="new iconBox">
			<i class="fa-regular fa-calendar-days"  aria-hidden="true"  ></i>
          </div>
		  <div class="fr">
    					<input type="date" name="Fecha" placeholder="Fecha"
              class="textBox" autofocus="on" required>
    			</div>
				<div class="clr"></div>
    		</div>
		
				<div class="box">
          <label for="Descripcion" class="fl fontLabel"> Descripcion: </label>
    			<div class="fl iconBox"><i class="fa-solid fa-file-invoice-dollar" aria-hidden="true"></i></i></div>
    			<div class="fr">
    					<input type="text" required name="Descripcion"  placeholder="Descripcion" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
	

<br><br>
		
	
		 <button class="submit2" type="submit" name="submit">SUBMIT</button>
			</div>

		</div>

<br>
	
				</form>
				
	
				
				
				
				
		
				

<form action="VerTransacciones.php">
	<button class="btn-flotante" type="volver" name="volver" >Volver</button>

<br><br></form>	
</body>
</html>	