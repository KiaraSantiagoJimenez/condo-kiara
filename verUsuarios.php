
<?php
    include("dbconnect.php");
    session_start();
    if(!isset($_SESSION['admin'])) {
        header("Location:index.php");
    }
?>
<!DOCTYPE html>
<?php
include('adminheader.php')

?>

<?php
include ("dbconnect.php");
$result = mysqli_query($db,"SELECT * FROM usuarios");
?>

<head>
	<title>Usuarios</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="styles.css">	
</head>

<body class="maincontent">	


<hr class="break">
		<h2 class="add_data">Usuarios</h2>

	<hr class="break">
	<div class="values">
<div class="board">
<div class="dbtables">
<button class="anadir"><a href="usuarios.php">Añadir  &nbsp;<i class="fa-regular fa-plus"></i></a></button>

<table border= "2" class="tablasInsertar" style=""> 
<thead>
	<tr>
		<td> Nombre</td>
		<td> Apellido </td>
		<td> Email </td>
		<td> Telefono </td>
		<td> Username </td>
		<!--<td style="width:20%;" > Password</td>-->

		<td> Opciones</td>
	</tr>
</thead>

<?php 
$i=0;
while($row = mysqli_fetch_array($result)){
	?>
<tr>

      <td><?php echo $row["NombreUsuario"];?> </td>
    <td><?php echo $row["ApellidoUsuario"];?> </td>
    <td><?php echo $row["EmailUsuario"];?> </td>
    <td> <?php echo $row["TelefonoUsuario"];?></td>

	<td> <?php echo $row["Username"];?></td>
<!--<td class ="a"> <?php //echo $row["Password"];?></td> -->

	<td>
   <button class="btn"> <?php echo '<a href="#" onclick="myFunction('.$row["IdUsuario"].')"> <i class="fa fa-trash"></i></a></button>';?>
    <button class="btn"><a href="editarUsuario.php?IdUsuario=<?php echo $row["IdUsuario"];?>"><i class="fa fa-edit"></i></a></button></td>
  </tr>
<?php 
$i++;
} ?>
</table>
<form action="home.php">
	<button class="btn-flotante" type="submit" name="volver" >Volver</button>

<br><br></form>

<script>
	function myFunction(IdUsuario)
	{
	var r=confirm("¿Estas seguro que quieres remover este producto?");
	if (r==true) //Ensures the user does not delete an item by mistake
		{
			window.location.assign("deleteUsuario.php?IdUsuario=" + IdUsuario);
		}
	}
</script>
</body>
</html>