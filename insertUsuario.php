<?php

include ('dbconnect.php');
if(isset($_POST['save']))
{	 
	 $NombreUsuario = $_POST['NombreUsuario'];
	 $ApellidoUsuario = $_POST['ApellidoUsuario'];
	 $EmailUsuario = $_POST['EmailUsuario'];
	 $Sexo = $_POST['Sexo'];
	 $TelefonoUsuario = $_POST['TelefonoUsuario'];
	 $TelefonoAlternoUsuario = $_POST['TelefonoAlternoUsuario'];
	 $Username = $_POST['Username'];	 
	 $Password = hash('sha512',$_POST['Password']);
	 $Comentarios = $_POST['Comentarios'];
	 
	 $sql = "INSERT INTO usuarios (NombreUsuario,ApellidoUsuario,EmailUsuario,Sexo,TelefonoUsuario,TelefonoAlternoUsuario,Username,Password,Comentarios)
		VALUES ('$NombreUsuario','$ApellidoUsuario','$EmailUsuario','$Sexo','$TelefonoUsuario','$TelefonoAlternoUsuario','$Username','$Password','$Comentarios')";
	 
	if (mysqli_query($db,$sql)) {
		mysqli_close($db);
		echo '<script>alert ("El nuevo articulo fue anadido exitosamente"); </script>'; // Avisa al usuario 
		
		echo '<script>window.location.assign("VerUsuarios.php");</script>'; // Vuelve al 'Index'
	}
		else {
			echo '<script>alert("Error: " . $sql . " " . mysqli_error($db)"); </script>';
			mysqli_close($db);
			echo '<script>window.location.assign("usuarios.php");</script>';
		}
}
?>