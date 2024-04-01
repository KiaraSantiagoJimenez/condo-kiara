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
<?php
include ('dbconnect.php');
$result = mysqli_query($db,"SELECT * FROM apartamentos ");
?>
<!DOCTYPE html>
<html>


<head>
	<title>Apartamentos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="styles.css">	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css%22%3E">
</head>

<body class="maincontent">	
<hr class="break">
		<h2 class="add_data">Apartamentos</h2>

	<hr class="break">
	<div class="values">
<div class="board">
<div class="dbtables">
<button class="anadir"><a href="apartamentoPrueba.php">Anadir  &nbsp;<i class="fa-regular fa-plus"></i></a></button>
<br>
<br>
<table border= "2" class="tablasInsertar"> 
<thead>
	<tr>
		
		<td> Numero de Apartamento</td>
		<td> Nombre del Dueño</td>
		<td> Apellido del Dueño </td>
		<td> Email </td>
		<td> Telefono </td>
		<td> Cuota </td>
		<td> Deuda </td>
		<td> Opciones </td>
	</tr>
</thead>
<?php 
$i=0;
while($row = mysqli_fetch_array($result)){
	?>
<tr>

      <td><?php echo $row["NumApartamento"];?> </td>
    <td><?php echo $row["NombreDueno"];?> </td>
    <td><?php echo $row["ApellidoDueno"];?> </td>
    <td> <?php echo $row["EmailDueno"];?></td>
	<td> <?php echo $row["Telefono"];?></td>
	<td class= "derecha"> <?php echo $row["Cuota"];?></td>
	<td class= "derecha"> <?php echo ROUND($row["Deuda"],2);?></td>

	<td>
	
    <button class="btn"> <?php echo '<a href="#" onclick="myFunction('.$row["IdApartamento"].')"> <i class="fa fa-trash"></i></a></button>';?>
    <button class="btn"><a href="editarApartamento.php?IdApartamento=<?php echo $row["IdApartamento"];?>"><i class="fa fa-edit"></i></a></button></td>
 
 </tr>
<?php 
$i++;
} ?>
</table>

<form action="home.php">
	<button class="btn-flotante" type="volver" name="volver" >Volver</button>

<br><br></form>



<script>
	function myFunction(idApartamento)
	{
	var r=confirm("¿Estas seguro que quieres remover este producto?");
	if (r==true) //Ensures the user does not delete an item by mistake
		{
			window.location.assign("deleteApartamento.php?idApartamento=" + idApartamento);
		}
	}
</script>


</body>
</html>