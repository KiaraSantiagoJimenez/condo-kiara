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
include'dbconnect.php';
$result = mysqli_query($db,"SELECT * FROM transacciones");
?>
<!DOCTYPE html>


<html>
<head>
	<title>Transacciones</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="styles.css">	
</head>


<body class="maincontent">	


<hr class="break">
		<h2 class="add_data">Transacciones</h2>

	<hr class="break">
	<!-- <div class="values"> -->

<div class="dbtables">
<button class="anadir"><a href="transacciones.php">Añadir Transacciones Individuales &nbsp;<i class="fa-regular fa-plus"></i></a></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button class="anadir"><a href="cargoApartamentos.php">Cuota de Mantenimiento  &nbsp;<i class="fa-regular fa-plus"></i></a></button>
<table border= "2" class="tablasInsertar"> 
<thead>
	<tr>
		<td> Numero del Apartamento</td>
		<td> Fecha </td>
		<td> Concepto </td>
		<td> Descripcion </td>
		<td> Cantidad </td>
		<td> Pagos </td>
		<td>Opciones</td>
		
	</tr>
</thead>
<?php 
$i=0;
while($row = mysqli_fetch_array($result)){
	?>


      <td><?php echo $row["NumApartamento"];?> </td>
    <td><?php echo $row["Fecha"];?> </td>
    <td><?php echo $row["Concepto"];?> </td>
    <td><?php echo $row["Descripcion"];?> </td>
    <td class= "derecha"> <?php echo $row["Cantidad"];?></td>
    <td> <?php echo $row["MetodoPago"];?></td>
	<td>
   <button class="btn" name="save" > <?php echo '<a href="#" onclick="myFunction('.$row["IdTransaccion"].')"> <i class="fa fa-trash"></i></a></button>';?>
    <button class="btn"><a href="editarTransacciones.php?IdTransaccion=<?php echo $row["IdTransaccion"];?>"><i class="fa fa-edit"></i></a></button></td>
  </tr>
<?php 
$i++;
} ?>
<div class="button-arriba">
        <a class="item" id="buttonTop">
            <i class="fas fa-arrow-up"></i>
        </a>
    </div>

    <script src="script.js"></script>

</table>
<form action="home.php">
	<button class="btn-flotante" type="submit" name="volver" >Volver</button>

<br><br></form>


<script>
	function myFunction(IdTransaccion)
	{
	var r=confirm("¿Estas seguro que quieres remover esta transaccion?");
	if (r==true) //Ensures the user does not delete an item by mistake
		{
			window.location.assign("deleteTransaccion.php?IdTransaccion=" + IdTransaccion);
			
		}
	}
</script>

</body>
</html>