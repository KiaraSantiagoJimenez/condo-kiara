
<?php
    include("dbconnect.php");
    session_start();
    if(!isset($_SESSION['admin'])) {
        header("Location:index.php");
    }
?>
<?php	


	$result = mysqli_query($db,"SELECT * FROM transacciones WHERE IdTransaccion='" . $_GET['IdTransaccion'] . "'");
	$row=mysqli_fetch_array($result);	
	$CantidadActual = $row["Cantidad"];
	
 include("dbconnect.php");
	if (count($_POST) > 0) {
	
	$query = "UPDATE transacciones set 
	IdTransaccion='" .			$_POST['IdTransaccion'] . "', 
	NumApartamento='" .			$_POST['NumApartamento'] . "', 
	Fecha='" . 					$_POST['Fecha'] . "',
	Concepto='" . 				$_POST['Concepto'] . "',
	Descripcion='".				$_POST['Descripcion']."',
	Cantidad='" . 				$_POST['Cantidad'] . "' ,
	MetodoPago='". 				$_POST['MetodoPago'] ."'
	WHERE IdTransaccion= '" . 	$_POST['IdTransaccion'] . "'";
	
	mysqli_query($db, $query);
	
	
	
	
$results = mysqli_query($db,"SELECT * FROM `transacciones` WHERE IdTransaccion ='" . $_GET["IdTransaccion"] . "'");
$rows = mysqli_fetch_array($results);

			
				
			$Con = $rows["Concepto"];
		$CantidadActual= $_POST['CantidadActual'];
	

	
	if(isset($_POST['save'])){
			
			$Cantidad= $_POST['Cantidad'];
			$CantidadActual= $_POST['CantidadActual'];
			
			switch($_POST['Concepto']):
				
			case 'Credito':
			
			mysqli_query($db, "UPDATE apartamentos SET Deuda=Deuda +'" . $_POST['CantidadActual'] . "' WHERE NumApartamento='" . $_POST['NumApartamento'] . "'");
			mysqli_query($db, "UPDATE apartamentos SET Deuda=Deuda -'" . $_POST['Cantidad'] . "' WHERE NumApartamento='" . $_POST['NumApartamento'] . "'");

	

			
			
			break;
					
			case 'Cuota':
			case 'Multa':	
			case 'Derrama':
			case 'Debito':
			
			mysqli_query($db, "UPDATE apartamentos SET Deuda=Deuda -'" . $_POST['CantidadActual'] . "' WHERE NumApartamento='" . $_POST['NumApartamento'] . "'");
			mysqli_query($db, "UPDATE apartamentos SET Deuda=Deuda +'" . $_POST['Cantidad'] . "' WHERE NumApartamento='" . $_POST['NumApartamento'] . "'");
			
			
			
			break;
			endswitch;	
		}
			echo '<script>alert("Informacion Editada Exitosamente!");</script>';
		// Prompts the user_error
		echo '<script>window.location.assign("VerTransacciones.php");</script>';     
	}
	

	
?>

<!DOCTYPE html>
<?php
include('adminheader.php')

?>
<html>
<body>
<head>
	<title >Editar Transacciones</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="styles.css">	
</head>
<body class="maincontent">
<div class="container4">
<h3 class="headerUsuario" style="color: white">Editar Transacciones</h3>


		<hr class="break">

	<div class="form">
	
		
	<form  method="post" action="" >
	
			<div class="box">
		<label  for="IdTransaccion" class="fl fontLabel">ID:</label>
		<div class="new iconBox">
			<i class="fa-regular fa-hashtag"  aria-hidden="true"  ></i>
          </div>
		  <div class="fr">
    					<input type="text" name="IdTransaccion" placeholder="IdTransaccion"
              class="textBox" autofocus="on" value="<?php echo $row['IdTransaccion']; ?>" readonly>
    			</div>
				<div class="clr"></div>
    		</div>
					<div class="box">
		<label  for="NumApartamento" class="fl fontLabel">Apartamento:</label>
		<div class="new iconBox">
			<i class="fa-regular fa-hashtag"  aria-hidden="true"  ></i>
          </div>
		  <div class="fr">
    					<input type="text" name="NumApartamento" placeholder="Numero del Apartamento"
              class="textBox" autofocus="on" value="<?php echo $row['NumApartamento']; ?>" readonly>
    			</div>
				<div class="clr"></div>
    		</div>
					<div class="box">
		<label  for="Fecha" class="fl fontLabel">Fecha:</label>
		<div class="new iconBox">
			<i class="fa-regular fa-calendar-days"  aria-hidden="true"  ></i>
          </div>
		  <div class="fr">
    					<input type="date" name="Fecha" placeholder="Fecha"
              class="textBox" autofocus="on" required value="<?php echo $row['Fecha']; ?>">
    			</div>
				<div class="clr"></div>
    		</div>
			
			
			<div class="box">
		<label for="Concepto" class="fl fontLabel"> Concepto:</label>
		<div class="fl iconBox"><i class="fa-solid fa-pen" aria-hidden="true"></i>
		</div>
		<div class="fr">

			<input type="text" name="Concepto" placeholder="Concepto"
              class="textBox" autofocus="on" readonly value="<?php echo $row['Concepto']; ?>">
		
			</div>
			<div class="clr"></div>
    		</div>
			
				<div class="box">
		<label  for="Descripcion" class="fl fontLabel">Descripción:</label>
		<div class="new iconBox">
			<i class="fa-solid fa-pen"  aria-hidden="true"  ></i>
          </div>
		  <div class="fr">
    					<input type="text" name="Descripcion" placeholder="Descripcion"
              class="textBox" autofocus="on" required value="<?php echo $row['Descripcion']; ?>">
    			</div>
				<div class="clr"></div>
    		</div>
			
		<input type="hidden" name="CantidadActual"  class="textBox" value="<?php echo $CantidadActual ?>">
		
				<div class="box">
          <label for="Cantidad" class="fl fontLabel"> Cantidad: </label>
    			<div class="fl iconBox"><i class="fa-solid fa-file-invoice-dollar" aria-hidden="true"></i></i></div>
    			<div class="fr">
    					<input type="text" required name="Cantidad"  placeholder="Cantidad" class="textBox" value="<?php echo $row['Cantidad']; ?>">
    			</div>
    			<div class="clr"></div>
    		</div>
			
				<div class="box">
          <label for="MetodoPago" class="fl fontLabel"> Pagos: </label>
    			<div class="fl iconBox"><i class="fa-regular fa-credit-card" aria-hidden="true"></i></i></div>
    			<div class="fr">
    					<input type="text" required name="MetodoPago"  placeholder="Cash, cheque, Tarjeta..." class="textBox" value="<?php echo $row['MetodoPago']; ?>">
    			</div>
    			<div class="clr"></div>
    		</div>
		
		
<br><br><br><br>
		 <button class="submit2" type="submit" name="save">SUBMIT</button>
				</form>
		
		
		</div>
	</div>	
	

<br>
	</div>
</div>	
<form action="VerTransacciones.php">
	<button class="btn-flotante" type="volver" name="volver" >Volver</button>

<br><br></form>	
</body>
</html>	