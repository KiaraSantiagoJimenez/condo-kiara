
<?php
    include("dbconnect.php");
    session_start();
    if(!isset($_SESSION['admin'])) {
        header("Location:index.php");
    }
?>
<?php
 include("dbconnect.php");
	if (count($_POST) > 0) {
	
	mysqli_query($db,"UPDATE usuarios set 
	IdUsuario='" .			$_POST['IdUsuario'] . "', 
	NombreUsuario='" .			$_POST['NombreUsuario'] . "', 
	ApellidoUsuario='" . 		$_POST['ApellidoUsuario'] . "',
	EmailUsuario='" . 			$_POST['EmailUsuario'] . "',
	Sexo='".					$_POST['Sexo']."',
	TelefonoUsuario='" . 		$_POST['TelefonoUsuario'] . "' ,
	TelefonoAlternoUsuario='". 	$_POST['TelefonoAlternoUsuario'] ."',
	Username='" . 				$_POST['Username'] ."',
	Password='" . 				hash('sha512',$_POST['Password']) . "',
	Comentarios='" . 			$_POST['Comentarios'] . "'
	WHERE IdUsuario= '" . 		$_POST['IdUsuario'] . "'");

	echo '<script>alert("Informacion Editada Exitosamente!");</script>';
		// Prompts the user_error
	echo '<script>window.location.assign("VerUsuarios.php");</script>';
	}
	
	$result = mysqli_query($db,"SELECT * FROM usuarios WHERE IdUsuario='" . $_GET['IdUsuario'] . "'");
	$row=mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<?php
include('adminheader.php')

?>

<html>
<body>
<head>
	<title >Editar Usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="styles.css">	
</head>
<body class="maincontent">
<div class="container">
<h3 class="headerUsuario" style="color: white">Editar Usuario</h3>


		<hr class="break">

	<div class="form">
	
		
	<form  method="post" action="" >
	
		<div class="box">
		<label  for="IdUsuario" class="fl fontLabel">ID:</label>
		<div class="new iconBox">
			<i class="fa-regular fa-hashtag"  aria-hidden="true"  ></i>
          </div>
		  <div class="fr">
    					<input type="text" name="IdUsuario" placeholder="IdUsuario"
              class="textBox" autofocus="on" value="<?php echo $row['IdUsuario']; ?>">
    			</div>
				<div class="clr"></div>
    		</div>
	
	<div class="box">
		<label  for="NombreUsuario" class="fl fontLabel">Nombre:</label>
		<div class="new iconBox">
            <i class="fa fa-user" aria-hidden="true"></i>
          </div>
		  <div class="fr">
    					<input type="text" name="NombreUsuario" placeholder="Nombre"
              class="textBox" autofocus="on" required value="<?php echo $row['NombreUsuario']; ?>">
    			</div>
				<div class="clr"></div>
    		</div>
		  
		  
		  
		   
		  <div class="box">
		<label for="ApellidoUsuario" class="fl fontLabel">Apellido:</label>
		<div class="fl iconBox"><i class="fa fa-user" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" required name="ApellidoUsuario"
              placeholder="Apellido" class="textBox" value="<?php echo $row['ApellidoUsuario']; ?>">
    			</div>
    			<div class="clr"></div>
    		</div>

		
		<div class="box">
	   <label for="EmailUsuario" class="fl fontLabel"> Email: </label>
				<div class="fl iconBox"><i class="fa fa-envelope" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" required name="EmailUsuario" placeholder="Email" class="textBox" value="<?php echo $row['EmailUsuario']; ?>">
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
          <label for="TelefonoUsuario" class="fl fontLabel"> Telefono: </label>
    			<div class="fl iconBox"><i class="fa fa-phone-square" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" required name="TelefonoUsuario" maxlength="10" placeholder="Telefono" class="textBox" value="<?php echo $row['TelefonoUsuario']; ?>">
    			</div>
    			<div class="clr"></div>
    		</div>
			
		

			<div class="box">
          <label for="TelefonoAlternoUsuario" class="fl fontLabel"> Telefono 2: </label>
    			<div class="fl iconBox"><i class="fa fa-phone-square" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" required name="TelefonoAlternoUsuario" maxlength="10" placeholder="Telefono Alterno" class="textBox" value="<?php echo $row['TelefonoAlternoUsuario']; ?>">
    			</div>
    			<div class="clr"></div>
    		</div>
		
			
				<div class="box">
		<label  for="Username" class="fl fontLabel">Username:</label>
		<div class="new iconBox">
            <i class="fa fa-user" aria-hidden="true"></i>
          </div>
		  <div class="fr">
    					<input type="text" name="Username" placeholder="Username"
              class="textBox" autofocus="on" required value="<?php echo $row['Username']; ?>">
    			</div>
				<div class="clr"></div>
    		</div>
		

			<div class="box">
          <label for="Password" class="fl fontLabel"> Password: </label>
    			<div class="fl iconBox"><i class="fa fa-key" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="Password" required name="Password" placeholder="Password" class="textBox" value="<?php echo $row['Password']; ?>">
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

		
<br>
<br>
<br>
		
		  <button class="submit" type="submit" name="submit" value="submit" >SUBMIT</button>
		</form>
		</div></div>
	<form action="verUsuarios.php">
	<button class="btn-flotante" type="volver" name="volver" >Volver</button>

</form>
		<br>
		<br>


</body>
</html>	