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
	
	mysqli_query($db,"UPDATE `condominio` set  
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
	echo '<script>window.location.assign("verCondominio.php");</script>';
	
	}
	
	$result = mysqli_query($db,"SELECT * FROM `condominio` WHERE idCondominio='" . $_GET['idCondominio'] . "'");
	$row=mysqli_fetch_array($result);
	
?>


<html>
	<head>
		<title> Edit  </title>
		<meta charset="utf-8">						
		<link rel="stylesheet" href="styles.css">	
		</head>
		<body>

<form method="post" action=""  autocomplete="off" enctype="multipart/form-data">
<br><br>
		<label>idCondominio</label>
		<input type="text" name="idCondominio" placeholder="idCondominio"
               readonly
			  value="<?php echo $row['idCondominio'] ?>"/>
			  <br><br>
		<label>NombreCondominio</label>
			<input type="text" name="NombreCondominio" placeholder="NombreCondominio"
			  value="<?php echo $row['NombreCondominio'] ?>"/>
			  	  <br><br>
		<label>DirrecionFisica</label>
			<input type="text" name="DirrecionFisica" placeholder="DirrecionFisica"
			  value="<?php echo $row['DirrecionFisica'] ?>"/>
			  <br><br>
			  <label>DireccionPostalCondominio</label>
			<input type="text" name="DireccionPostalCondominio" placeholder="DireccionPostalCondominio"
			  value="<?php echo $row['DireccionPostalCondominio'] ?>"/>
			  <br><br>
			  <label>Telefono</label>
			<input type="text" name="Telefono" placeholder="Telefono"
			  value="<?php echo $row['Telefono'] ?>"/>
			  <br><br>
			  <label>Logo</label>
			<input class="imagen2" type="file" required name="Logo"  placeholder="Logo"  >
			  <label>Webpage</label>
			<input type="text" name="Webpage" placeholder="Webpage"
			  value="<?php echo $row['Webpage'] ?>"/>
			  <br><br>
			   <input class="submit2" type="submit" name="submit" value="Submit">
				</form>
				</body>
				</html>