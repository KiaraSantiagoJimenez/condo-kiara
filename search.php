
<?php
	include("dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
?>
<?php
	include("adminheader.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Search Hub</title>
<link href="styles.css" rel="stylesheet" type="text/css"/>
</head>
<body class="maincontent">
<div class="">

<div class="background" >
<div class ="profilesearch"> 
<div class="topnav">
  <div class="search-container">
    <form action="search.php" method="GET">
      <input type="text"  name="search" placeholder="Apartamentos/Usuarios" required value="<?php if(isset($_GET['search'])){echo $_GET['search'];} ?>" >
      <button type="submit" name="enviar" value="Busqueda"><i class="fa fa-search"></i></button>
    </form><br>
</div></div>

<div class="dbtables">
	<table id="tablasInsertar" width "959px" style="position:center;" >
	<thead>
	<tr>
		<th>Numero de Apartamento</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Cuota</th>
		<th>Deuda</th>

	</tr>
	</thead>
	<?php
	
	$con = mysqli_connect("localhost","root","","condo-kiara");

	
	if(isset($_GET['search']))
	{
		$filtervalues = $_GET['search'];
		
		$query = "SELECT * FROM apartamentos WHERE CONCAT (NumApartamento, NombreDueno, ApellidoDueno) LIKE '%$filtervalues%' ";
	
		$query_run = mysqli_query($con,$query);
		
		if(mysqli_num_rows($query_run) > 0 )
		{
			foreach($query_run as $items)
		
			{
				?>
				<tr>
				
					<td><?= $items['NumApartamento']; ?></td>
					<td><?= $items['NombreDueno']; ?></td>
					<td><?= $items['ApellidoDueno']; ?></td>
					<td><?= $items['Cuota']; ?></td>
					<td><?= ROUND($items['Deuda'],2);?></td>
				
				</tr>
				<?php
			}
		}
		else
		{
			?>
				<tr>
				
					<td colspan="4" >No Record Found.</td>
				
				</tr>
			<?php
			
		}
	}
	
	
	?>
	
	
	</table>
	<p>&nbsp
	<br>
	<table id="tablasInsertar" width "959px" >
	<thead>
	<tr>
		<th>Usuarios: Nombre</th>
		<th>Apellido</th>
		<th>Email</th>
		<th>Telefono</th>

	</tr>
	</thead>
	<?php
	
	$con = mysqli_connect("localhost","root","","condo-kiara");

	if(isset($_GET['search']))
	{
		$filtervalues = $_GET['search'];
		$query = "SELECT * FROM `usuarios` WHERE CONCAT (NombreUsuario, ApellidoUsuario, EmailUsuario, TelefonoUsuario) LIKE '%$filtervalues%' ";

		$query_run = mysqli_query($con,$query);
		
		if(mysqli_num_rows($query_run) > 0 )
		{
			foreach($query_run as $items)
		
			{
				?>
				<tr>
				
					<td><?= $items['NombreUsuario']; ?></td>
					<td><?= $items['ApellidoUsuario']; ?></td>
					<td><?= $items['EmailUsuario']; ?></td>
					<td><?= $items['TelefonoUsuario']; ?></td>
				
				</tr>
				<?php
			}
		}
		else
		{
			?>
				<tr>
				
					<td colspan="4" >No Record Found.</td>
				
				</tr>
			<?php
			
		}
	}
	
	
	?>
	
	
	</table>
	
	
	<br><br>

	<table id="tablasInsertar" width "959px" >
	<thead>
	
	<tr>
		<th>Numero de Apartamento</th>
		<th>Fecha</th>
		<th>Concepto</th>
		<th>Descripcion</th>
		<th>Cantidad</th>
		<th>Metodo de pago</th>

	</tr>
	</thead>
	<?php
	
	$con = mysqli_connect("localhost","root","","condo-kiara");

	
	if(isset($_GET['search']))
	{
		$filtervalues = $_GET['search'];
		
		$query = "SELECT * FROM transacciones WHERE CONCAT(  NumApartamento, Concepto) LIKE '%$filtervalues%' ";
	
		$query_run = mysqli_query($con,$query);
		
		if(mysqli_num_rows($query_run) > 0 )
		{
			foreach($query_run as $items)
			//returns with data
			{
				?>
				<tr>
				
					<td><?= $items['NumApartamento']; ?></td>
					<td><?= $items['Fecha']; ?></td>
					<td><?= $items['Concepto']; ?></td>
					<td><?= $items['Descripcion']; ?></td>
					<td><?= $items['Cantidad']; ?></td>
					<td><?= $items['MetodoPago']; ?></td>
				
				</tr>
				<?php
			}
		}
		else
		{
			?>
				<tr>
				
					<td colspan="4" >No Record Found.</td>
				
				</tr>
			<?php
			
		}
	}
	
	
	?>
	
	
	</table>
</div>
 </div>

</div>
<form action="home.php">
<button  class="flotar" type="submit" name="volver" >home</button>

<br><br></form>

</body>
</html>

