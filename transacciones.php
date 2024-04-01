

<?php
    include("dbconnect.php");
    session_start();
    if(!isset($_SESSION['admin'])) {
        header("Location:index.php");
    }
?>

<?php $AptNum = "SELECT * FROM apartamentos";
    $showAptNum = mysqli_query($db, $AptNum);
?>


<!DOCTYPE html>
	<?php
include('adminheader.php')

?>

<html>
<head>
<title >Añadir Transacciones</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="styles.css">	
</head>


<body class="maincontent">
<div class="container4">	
	<h2 class="headerUsuario" style="color: white"> Transacciones</h2>
<hr class="break">
<br><br>
	<div class="form">

		
	<form action="insertTransaccion.php" method="post" autocomplete="off">
		
		<div class="box">
		<label  for="NumApartamento" class="fl fontLabel">Numero Apt:</label>
		<div class="new iconBox">
			<i class="fa-regular fa-hashtag"  aria-hidden="true"  ></i>
          </div>
		  <div class="fr">
		  
		 
      <select  name="NumApartamento" style="width:283px;padding: 10px; text-align:center; font-size:16px;">

            <?php

                while($aptnum = mysqli_fetch_array($showAptNum, MYSQLI_ASSOC)):;

            ?>
            <option value=<?php echo $aptnum["NumApartamento"];?> >

                    <?php echo $aptnum["NumApartamento"]; ?>

            </option>

            <?php endwhile; ?>

            </select>
   

    			</div>
				<div class="clr"></div>
    		</div>
		
				<div class="box">
		<label  for="Fecha" class="fl fontLabel">Fecha:</label>
		<div class="new iconBox">
			<i class="fa-regular fa-calendar-days"  aria-hidden="true"  ></i>
          </div>
		  <div class="fr">
    					<input type="date" name="Fecha" placeholder="Fecha"
              class="textBox" autofocus="on" required>
    			</div>
				<div class="clr"></div>
    		</div>
		

			
			
			<div class="box">
		<label for="Concepto" class="fl fontLabel"> Concepto: </label>
		<div class="fl iconBox"><i class="fa-solid fa-pen" aria-hidden="true"></i>
		</div>
		<div class="fr">

			<select style="width:283px;padding: 10px; text-align:center; font-size:16px;"" name="Concepto" >
			<option>Debito</option>
			<option>Multa</option>
			<option>Derrama</option>
			<option>Credito</option>
			</select>
			</div>
			</div>
			
				<div class="box">
		<label  for="Descripcion" class="fl fontLabel">Descripción:</label>
		<div class="new iconBox">
			<i class="fa-solid fa-pen"  aria-hidden="true"  ></i>
          </div>
		  <div class="fr">
    					<input type="text" name="Descripcion" placeholder="Descripcion"
              class="textBox" autofocus="on" required>
    			</div>
				<div class="clr"></div>
    		</div>
		
				<div class="box">
          <label for="Cantidad" class="fl fontLabel"> Cantidad: </label>
    			<div class="fl iconBox"><i class="fa-solid fa-file-invoice-dollar" aria-hidden="true"></i></i></div>
    			<div class="fr">
    					<input type="text" required name="Cantidad"  placeholder="Cantidad" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
			
				<div class="box">
          <label for="MetodoPago" class="fl fontLabel"> Pagos: </label>
    			<div class="fl iconBox"><i class="fa-regular fa-credit-card" aria-hidden="true"></i></i></div>
    			<div class="fr">
    					<input type="text" required name="MetodoPago"  placeholder="Cash, cheque, Tarjeta..." class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
		
		
<br><br><br><br>
		 <button class="submit2" type="submit" name="save">SUBMIT</button>
				</form>
		
		
		</div>
	</div>	
	

<br>
	
</div>	
<form action="VerTransacciones.php">
	<button class="btn-flotante" type="volver" name="volver" >Volver</button>

<br><br></form>	
</body>
</html>	