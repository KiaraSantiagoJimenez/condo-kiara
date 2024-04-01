
<?php

include ('dbconnect.php');
if(isset($_POST['save']))
{	 

	 
	$idCondominio = 				$_POST['idCondominio']; 
	$NombreCondominio= 			$_POST['NombreCondominio']; 
	$DirrecionFisica= 			$_POST['DirrecionFisica']; 
	$DirrecionPostalCondominio=	$_POST['DirrecionPostalCondominio'];
	$Telefono= 					$_POST['Telefono'];
	$Logo=						addslashes(file_get_contents($_FILES['Logo']['tmp_name']));
	$Webpage=					$_POST['Webpage']; 
	 
	 $sql = "INSERT INTO `condominio` (idCondominio,NombreCondominio,DirrecionFisica,DirrecionPostalCondominio,Telefono,Logo,Webpage)
		VALUES ('$idCondominio','$NombreCondominio','$DirrecionFisica','$DirrecionPostalCondominio','$Telefono','$Logo','$Webpage')";
	 
	if (mysqli_query($db,$sql)) {
		mysqli_close($db);
		echo '<script>alert ("El nuevo articulo fue añadido exitosamente"); </script>'; // Avisa al usuario 
		
		echo '<script>window.location.assign("VerApartamentos.php");</script>'; // Vuelve al 'Index'
	}
		else {
			echo '<script>alert("Error: " . $sql . " " . mysqli_error($db)"); </script>';
			mysqli_close($db);
			echo '<script>window.location.assign("apartamentoPrueba.php");</script>';
		}
}
?>