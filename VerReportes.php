<?php
    include("dbconnect.php");
    session_start();
    if(!isset($_SESSION['admin'])) {
        header("Location:index.php");
    }
?>

<?php
include('adminheader.php')

?>

<!DOCTYPE html>


<html>
<head>
	<title>Reportes</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="styles.css">	
</head>
<body class="maincontent">	

	<div class="container4">

		<h2  class="headerUsuario" style="color: white">Reportes</h2>

	<hr class="break">
	
	
	<form action="reportes.php">
	<label class="fontLabel" style="font-size:25px;"> Información de los apartamentos:</label> 
	<br>
	<button class="reportes">Generar</button>
	</form>
	<br><br>
	<form action="reportesBalance.php">
	<label class="fontLabel"style="font-size:25px;"> Información de los apartamentos con su balance:</label> 
	<br>
	<button class="reportes">Generar</button>
	</form>
	<br><br>
	<form action="reportesDeuda.php">
	<label class="fontLabel"style="font-size:25px;"> Información de los apartamentos que tienen deudas:</label> 
	<br>
	<button class="reportes"> Generar</button>
	</form>
	<br><br>
	<form action="reportesSinDeuda.php">
	<label class="fontLabel"style="font-size:25px;"> Información de los apartamentos que no tienen deudas:</label> 
	<br>
	<button class="reportes">Generar</button>
	</form>
	</div>
</body>
</html>