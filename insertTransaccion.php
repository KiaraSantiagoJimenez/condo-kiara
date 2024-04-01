<?php

include ('dbconnect.php');
if(isset($_POST['save']))
{	 
	 $NumApartamento = $_POST['NumApartamento'];
	 $Fecha = $_POST['Fecha'];
	 $Concepto = $_POST['Concepto'];
	 $Descripcion = $_POST['Descripcion'];
	 $Cantidad = $_POST['Cantidad'];
	 $MetodoPago = $_POST['MetodoPago'];
	 $sql = "INSERT INTO transacciones (NumApartamento,Fecha,Concepto,Descripcion,Cantidad,MetodoPago)
		VALUES ('$NumApartamento','$Fecha','$Concepto','$Descripcion','$Cantidad','$MetodoPago')";

		if (count($_POST)>0){
			
			switch($_POST['Concepto']):
				
			case 'Credito':
			mysqli_query($db, "UPDATE `apartamentos` SET Deuda= (Deuda -'" . $_POST['Cantidad']. "') WHERE NumApartamento='" . $_POST['NumApartamento'] . "'");
			break;
			
			case 'Multa':	
			case 'Derrama':
			case 'Debito':
			mysqli_query($db, "UPDATE `apartamentos` SET Deuda= (Deuda +'" . $_POST['Cantidad']. "') WHERE NumApartamento='" . $_POST['NumApartamento'] . "'");
			break;
			
			
			endswitch;
			
		}
	 
	 
	if (mysqli_query($db,$sql)) {
		mysqli_close($db);
		echo '<script>alert ("El nuevo articulo fue anadido exitosamente"); </script>'; // Avisa al usuario 
		
		echo '<script>window.location.assign("VerTransacciones.php");</script>'; 
	}
		else {
			echo '<script>alert("Error: " . $sql . " " . mysqli_error($db)"); </script>';
			mysqli_close($db);
			echo '<script>window.location.assign("transacciones.php");</script>';
		}
}


?>

