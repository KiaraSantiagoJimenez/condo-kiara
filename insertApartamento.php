<?php

include ('dbconnect.php');
if(isset($_POST['save']))
{	 
	 $NumApartamento = $_POST['NumApartamento'];
	 $NombreDueno = $_POST['NombreDueno'];
	 $ApellidoDueno = $_POST['ApellidoDueno'];
	 $DireccionPostal = $_POST['DireccionPostal'];
	 $Sexo = $_POST['Sexo'];
	 $EmailDueno = $_POST['EmailDueno'];
	 $Telefono = $_POST['Telefono'];
	 $TelefonoAlterno = $_POST['TelefonoAlterno'];
	 $Cuota = $_POST['Cuota'];	 
	 $Deuda = $_POST['Deuda'];
	 $Comentarios = $_POST['Comentarios'];
	 
	 $sql = "INSERT INTO `apartamentos` (NumApartamento,NombreDueno,ApellidoDueno,DireccionPostal,Sexo,EmailDueno,Telefono,TelefonoAlterno,Cuota,Deuda,Comentarios)
		VALUES ('$NumApartamento','$NombreDueno','$ApellidoDueno','$DireccionPostal','$Sexo','$EmailDueno','$Telefono','$TelefonoAlterno','$Cuota','$Deuda','$Comentarios')";
	 
	if (mysqli_query($db,$sql)) {
		mysqli_close($db);
		echo '<script>alert ("El nuevo articulo fue anadido exitosamente"); </script>'; // Avisa al usuario 
		
		echo '<script>window.location.assign("VerApartamentos.php");</script>'; // Vuelve al 'Index'
	}
		else {
			echo '<script>alert("Error: " . $sql . " " . mysqli_error($db)"); </script>';
			mysqli_close($db);
			echo '<script>window.location.assign("apartamentoPrueba.php");</script>';
		}
}
?>