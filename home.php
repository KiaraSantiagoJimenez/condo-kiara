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
include ("dbconnect.php");
$result = mysqli_query($db,"SELECT * FROM condominio");
	$row=mysqli_fetch_array($result);
	
?>
<!DOCTYPE html>
<html>

<head>

	<title>Condominio</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="styles.css">	
</head>


<body style="	 margin: 0px;" >	
<div  class="fondoCondominio">

<div class="topnav">
  <div class="search-container">
    <form action="search.php" method="GET">
      <input type="text"  name="search" placeholder="Apartamentos/Usuarios" required value="<?php if(isset($_GET['search'])){echo $_GET['search'];} ?>" >
      <button type="submit" name="enviar" value="Busqueda"><i class="fa fa-search"></i></button>
    </form>
</div></div>

	

<div class="dbtables">
<section class="condominios">
<img src="data:image/jpg;base64,<?php echo base64_encode($row['Logo']); ?>"/> 
<br><br>
<?php echo $row['NombreCondominio']; ?>

<br> 
<?php echo $row['DirrecionFisica']; ?>
<br>
<?php echo $row['DireccionPostalCondominio']; ?>
<br>
<?php echo $row['Telefono']; ?>
<br>

<br>
<?php echo $row['Webpage']; ?>

    <button class="btn"><a href="editarCondominio.php?idCondominio=<?php echo $row["idCondominio"];?>"><i class="fa fa-edit"></i></a></button></td>

 </section>

</div>
</div>
</body>
</html>
