<?php
	include 'dbconnect.php';
	
	
	
/*	$query= mysqli_query($db, "SELECT IdTransaccion FROM transacciones WHERE idApartamento= '" . $_GET['idApartamento'] . "'");
$result= mysqli_fetch_array($query);
$transactions= $result['IdTransaccion'];

if(empty($transactions))
{

    mysqli_query($db,"DELETE FROM apartamentos WHERE IdApartamento='" . $_GET['IdApartamento'] . "'");
    mysqli_close($db); 
    exit;    
}
else if(!empty($transactions)){
	
    echo '<script> alert("no se puede borrar, hay transacciones.")</script>';
   echo 'window.location.replace("VerApartamentos.php")</script>'; 

}	
	
*/	
include ('dbconnect.php');
$result = mysqli_query($db,"SELECT Deuda FROM apartamentos WHERE idApartamento='" . $_GET["idApartamento"] . "' ");
$row = mysqli_fetch_array($result);
	
   $debtamount = $row["Deuda"];

if($debtamount > 0)
{
    echo '<script> alert("No se puede eliminar el apartamento porque tiene deudas.");</script>';
	echo '<script>window.location.assign("VerApartamentos.php");</script>';
}
else{

	
	$sql = "DELETE FROM apartamentos WHERE idApartamento='" . $_GET["idApartamento"] . "'";
	
	
	
	//$sql = "DELETE FROM transacciones WHERE NumApartamento='" . $_GET["NumApartamento"] . "'";
	
	
	
	//This sends the SQL command to the database to be able to delete a given item.
	
if (mysqli_query($db, $sql)) 
	{
	echo '<script>alert("Removido exitosamente!");</script>';
	
	echo '<script>window.location.assign("VerApartamentos.php");</script>';
	} //Returns the user back to the deletion page 
else 
	{
	echo '<script>alert("Borrando...: " . mysqli_error($db)!");</script>';
	}
mysqli_close($db);
}
		
?>