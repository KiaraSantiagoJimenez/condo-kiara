
<?php
include('adminheader.php')

?>

<?php
    include("dbconnect.php");
    session_start();
    if(!isset($_SESSION['admin'])) {
        header("Location:index.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Añadir Apartamento</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="styles.css">	
</head>

<body class="maincontent">
	
<br>

	<h2 class="add_data">Añadir Apartamento</h2>
	
	<hr class="break">
	<br>
	<br>
	<!-- DIV CLASS FOR ALIGNMENT-->
	<div class="form">
	<div class="columnas">
	
	
	
	<div style="padding-left: 600px;">	
	<form action="insertarApartamento.php" method="post" autocomplete="off">
		<p class="form_labels" >Numero de Apartamento:</p>
		<input type="text" name="NumApartamento" required> 
		<p class="form_labels">Nombre del dueño:</p>
		<input type="text" name="NombreDueno" required>
		<p class="form_labels">Apellido del Dueño:</p>
		<input type="text" name="ApellidoDueno" required>
		<p class="form_labels">Direccion Postal:</p>
		<input type="text" name="DirrecionPostal" required>
		<p class="form_labels">Sexo:</p>
		<select name="Sexo" required>
		<option value="none" selected disabled hidden>Selecciona Opción</option>
		<option>F</option> 
		<option>M</option>
		</select> 
			<p class="form_labels">Email:</p>
		<input type="text" name="Emaildueno" required>
		
</div>
	<div style="padding-left: 50px;">
	
		<p class="form_labels" >Telefono:</p>
		<input type="text" name="Telefono" required>
		<p class="form_labels">Telefono Alterno:</p>
		<input type="text" name="TelefonoAlterno" required>
		<p class="form_labels">Cuota:</p>
		<input type="text" name="Cuota" required>
		<p class="form_labels">Deuda:</p>
		<input type="text" name="Deuda" required>
		<p class="form_labels">Comentarios:</p>
		<textarea name="Comentarios" cols=50 rows=3></textarea>
		
<br>
<br>
		<!--SUBMIT BUTTON-->
		  <button class="submit2" type="submit" name="save">SUBMIT</button>
		</form>
	<form action="verApartamentos.php">
	<button class="ver2" type="ver" name="Ver" >Apartamentos</button>
	</form>
		
		</div>
	</div>	
		<br>
		<br>
	</form>
	
	<hr class="break">
		<h2 class="add_data">Apartamentos</h2>

	<hr class="break">
	<div class="values">
<div class="board">
<div class="dbtables">
<table border= "2" class="tablasInsertar"> 
<thead>
	<tr>
		<td> Numero de Apartamento</td>
		<td> Nombre del Dueño</td>
		<td> Apellido del Dueño </td>
		<td> Direccion Postal </td>
		<td> Sexo </td>
		<td> Email </td>
		<td> Telefono </td>
		<td> Telefono Alterno </td>
		<td> Cuota </td>
		<td> Deuda </td>
		<td> Comentarios </td>
		<td> Opciones </td>
	</tr>
</thead>
<td> </td>
      <td> </td>
    <td> </td>
    <td> </td>
    <td> </td>
    <td> </td>
    <td> </td>
	<td> </td>
	<td> </td>
	<td> </td>
	<td> </td>
		<td> <a href="deleteApartamento.php" <i class="fa-solid fa-trash"> </i> </a><a href="editarApartamento.php" <i class="fa-solid fa-pen-to-square",</a></i></td>

  </tr><td> </td>
    <td> </td>
    <td> </td>
    <td> </td>
    <td> </td>
    <td> </td>
    <td> </td>
	<td> </td>
	<td> </td>
	<td> </td>
	<td></td>
	<td> <a href="delete.php" <i class="fa-solid fa-trash"> </i> </a><a href="editarApartamento.php" <i class="fa-solid fa-pen-to-square",</a></i></td>
  </tr>
  

<!--
<tbody>
	<tr>	
		<td><?php echo $row["NumApartamento"]; ?></td>
		<td><?php echo $row["NombreDueno"]; ?></td>
		<td><?php echo $row["DirrecionPostalCondominio"]; ?></td>
		<td><?php echo $row["ApellidoDueno"]; ?></td>
		<td><?php echo $row["DirrecionPostal"]; ?></td>
		<td><?php echo $row["Sexo"]; ?></td>
		<td><?php echo $row["Emaildueno"]; ?></td>
		<td><?php echo $row["Telefono"]; ?></td>
		<td><?php echo $row["TelefonoAlterno"]; ?></td>
		<td><?php echo $row["Cuota"]; ?></td>
		<td><?php echo $row["Deuda"]; ?></td>
		<td><?php echo $row["Comentarios"]; ?></td>

		<td><a href="#<?php echo $row["apartamentos"]; ?>">Editar</a></td>
	</tr>	
	</tbody>-->

</table>
</div>
</div>
	
<!--
	<hr class="break">
	<h2 class="add_data"> Eliminar Apartamento</h2>
	<hr class="break">
	<br>
	<div class="values">
<div class="board">
<div class="dbtables">
<table border= "2" class="tablasInsertar"> 
<thead>
	<tr>
		<td> Numero de Apartamento</td>
		<td> Nombre del Dueño</td>
		<td> Apellido del Dueño </td>
		<td> Direccion Postal </td>
		<td> Sexo </td>
		<td> Email </td>
		<td> Telefono </td>
		<td> Telefono Alterno </td>
		<td> Cuota </td>
		<td> Deuda </td>
		<td> Comentarios </td>
	</tr>
</thead>-->
<!--<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
?>
<tbody>
	<tr> 
		<td><?php echo $row["NumApartamento"]; ?></td>
		<td><?php echo $row["NombreDueno"]; ?></td>
		<td><?php echo $row["DirrecionPostalCondominio"]; ?></td>
		<td><?php echo $row["ApellidoDueno"]; ?></td>
		<td><?php echo $row["DirrecionPostal"]; ?></td>
		<td><?php echo $row["Sexo"]; ?></td>
		<td><?php echo $row["Emaildueno"]; ?></td>
		<td><?php echo $row["Telefono"]; ?></td>
		<td><?php echo $row["TelefonoAlterno"]; ?></td>
		<td><?php echo $row["Cuota"]; ?></td>
		<td><?php echo $row["Deuda"]; ?></td>
		<td><?php echo $row["Comentarios"]; ?></td>
		
		
		<?php echo '<td><a href="#" onclick="myFunction('.$row['idApartamento'].')">Remover</a> </td>';?>
	</tr> 
</tbody>
<?php
	$i++;
	}
?>

</table>
</div>
</div>
</div>
<script>
	function myFunction(NombreCondominio)
	{
	var r=confirm("¿Estas seguro que quieres remover este producto?");
	if (r==true) //Ensures the user does not delete an item by mistake
		{
			window.location.assign("delete.php?NombreCondominio=" + NombreCondominio);
		}
	}
</script>
-->
	
</div>	
</div>

</body>
</html>