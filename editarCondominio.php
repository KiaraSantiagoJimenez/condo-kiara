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
	
	mysqli_query($db,"UPDATE condominio set  
	idCondominio='". 				$_POST['idCondominio']."' , 
	NombreCondominio='" . 			$_POST['NombreCondominio']."' , 
	DirrecionFisica='" . 			$_POST['DirrecionFisica'] . "', 
	DireccionPostalCondominio='" .	$_POST['DireccionPostalCondominio'] . "',
	Telefono='" . 					$_POST['Telefono'] . "' ,
	Logo='" . 						addslashes(file_get_contents($_FILES['Logo']['tmp_name'])) . "',
	Webpage='" . 					$_POST['Webpage'] ."' 
	WHERE idCondominio= '" . 		$_POST['idCondominio'] . "'");

	echo '<script>alert("Informacion Editada Exitosamente!");</script>';
		// Prompts the user_error
	echo '<script>window.location.assign("home.php");</script>';
	
	}
	
	$result = mysqli_query($db,"SELECT * FROM condominio WHERE idCondominio='" . $_GET['idCondominio'] . "'");
	$row=mysqli_fetch_array($result);
	
?>




<!DOCTYPE html>
<?php
include('adminheader.php')

?>

<html>
<head>
	<title>Editar Condominio</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="styles.css">	
</head>

<body class="maincontent">
<div class="container">	
<br>

	<h2 class="headerUsuario">Editar informacion del Condominio</h2>
	<br>
	<hr class="break">
	<br>
	<br>
	
	<div class="form">
	
	<thead>
	<tr>
	<form action="" method="post" autocomplete="off" enctype="multipart/form-data">
	
	<div class="box">
		<label  for="idCondominio" class="fl fontLabel">ID:</label>
		<div class="new iconBox">
            <i class="fa fa-user" aria-hidden="true"></i>
          </div>
		  <div class="fr">
    					<input type="text" name="idCondominio" 
              class="textBox" required value="<?php echo $row['idCondominio']; ?>" >
    			</div>
				<div class="clr"></div>
    		</div>
	
	<div class="box">
		<label  for="NombreCondominio" class="fl fontLabel">Nombre:</label>
		<div class="new iconBox">
            <i class="fa fa-user" aria-hidden="true"></i>
          </div>
		  <div class="fr">
    					<input type="text" name="NombreCondominio" 
              class="textBox" required value="<?php echo $row['NombreCondominio']; ?>" >
    			</div>
				<div class="clr"></div>
    		</div>
		  
	
		<div class="box">
		<label  for="DirrecionFisica" class="fl fontLabel">Fisica:</label>
		<div class="new iconBox">
            <i class="fa-solid fa-diamond-turn-right" aria-hidden="true"></i>
          </div>
		  <div class="fr">
    					<input type="text" name="DirrecionFisica" 
              class="textBox" required value="<?php echo $row['DirrecionFisica']; ?>">
    			</div>
				<div class="clr"></div>
    		</div>
	
		<div class="box">
		<label  for="DireccionPostalCondominio" class="fl fontLabel">Postal:</label>
		<div class="new iconBox">
            <i class="fa-solid fa-route" aria-hidden="true"></i>
          </div>
		  <div class="fr">
    					<input type="text" name="DireccionPostalCondominio" placeholder="Dirrecion postal del condominio"
              class="textBox" autofocus="on" required value="<?php echo $row['DireccionPostalCondominio']; ?>">
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
          <label for="Logo" class="fl fontLabel"> Logo: </label>
    			<div class="fl iconBox"><i class="fa-solid fa-image" aria-hidden="true"></i></div>
    			
				<div class="input" style="color:white;">
				
    					<input style="padding: 10px;  font-size:16px;" type="file" required name="Logo"  placeholder="Logo" class="textBox" >
    			
				</div>
    			<div class="clr"></div>
    		</div>
						<div class="box">
          <label for="Webpage" class="fl fontLabel"> Webpage: </label>
    			<div class="fl iconBox"><i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" required name="Webpage"  placeholder="Webpage" class="textBox" value="<?php echo $row['Webpage']; ?>">
    			</div>
    			<div class="clr"></div>
    		</div>
			

        
<br>
<br>
		
		<!--SUBMIT BUTTON-->
		  <button class="submit2" type="submit" name="submit" value="submit">SUBMIT</button>
		</form>
		
		<br>
		<br>
	
</div>
</div>
<form action="home.php">
	<button class="btn-flotante" type="volver" name="volver" >Volver</button>

<br><br></form>	
</body>
</html>	