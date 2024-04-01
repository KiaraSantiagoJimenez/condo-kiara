<?php
	include 'dbconnect.php';
	
	

		$sql = "DELETE FROM transacciones WHERE IdTransaccion='" . $_GET["IdTransaccion"] . "'";
	
	


?>

<?php
$result = mysqli_query($db,"SELECT * FROM `transacciones` WHERE IdTransaccion ='" . $_GET["IdTransaccion"] . "'");
$row = mysqli_fetch_array($result);

			
				
			$Con = $row["Concepto"];
			$Num = $row["NumApartamento"];
			$Cant = $row["Cantidad"];


		switch($Con):
				
			case 'Credito':
			
			
			mysqli_query($db, "UPDATE `apartamentos` SET Deuda= (Deuda + $Cant) WHERE NumApartamento=$Num");
			break;
			
			case 'Multa':	
			case 'Derrama':
			case 'Debito':
			case 'Cuota':
			
			
			mysqli_query($db, "UPDATE `apartamentos` SET Deuda= (Deuda - $Cant) WHERE NumApartamento=$Num");
			break;
			
			
			endswitch;
if (mysqli_query($db, $sql)) 
	{
	echo '<script>alert("Removido exitosamente!");</script>';
	
	echo '<script>window.location.assign("VerTransacciones.php");</script>';
	} //Returns the user back to the deletion page 
else 
	{
	echo '<script>alert("Borrando...: " . mysqli_error($db)!");</script>';
	}
mysqli_close($db);

?>