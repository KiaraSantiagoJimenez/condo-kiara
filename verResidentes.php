


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
<?php
include'dbconnect.php';
$result = mysqli_query($db,"SELECT * FROM apartamentos");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="styles.css">
	</head>
<body class="maincontent">
<div class="topnav">

  <div class="search-container">
    <form action="search.php" method="GET">
      <input type="text"  name="search" placeholder="Apartamentos/Usuarios" required value="<?php if(isset($_GET['search'])){echo $_GET['search'];} ?>" >
      <button type="submit" name="enviar" value="Busqueda"><i class="fa fa-search"></i></button>
    </form>
</div></div>



	<h2 class="add_data">Tabla de los apartamentos </h2>
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

		<td> Cuota </td>
		<td> Deuda </td>

	</tr>
</thead>
<?php 
$i=0;
while($row = mysqli_fetch_array($result)){
	?>


      <td><?php echo $row["NumApartamento"];?> </td>
    <td><?php echo $row["NombreDueno"];?> </td>
    <td><?php echo $row["ApellidoDueno"];?> </td>

	<td class= "derecha"> <?php echo $row["Cuota"];?></td>
	<td class= "derecha"> <?php echo ROUND($row["Deuda"],2);?></td>

	</tr>
<?php 
$i++;
} ?>
</table>

</div>
</div>
</div>

</body>
</html>
