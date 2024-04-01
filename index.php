
<!DOCTYPE html>
<html>
<body>
<link rel="stylesheet" href="styles.css">	
<meta charset="utf-8">

<style>
/* Fonts Form Google Font ::- https://fonts.google.com/  -:: */
@import url('https://fonts.googleapis.com/css?family=Abel|Abril+Fatface|Alegreya|Arima+Madurai|Dancing+Script|Dosis|Merriweather|Oleo+Script|Overlock|PT+Serif|Pacifico|Playball|Playfair+Display|Share|Unica+One|Vibur');

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

body {
background-color:#2D101A;
background-attachment: fixed;
  background-repeat: no-repeat;

    font-family: 'Vibur', cursive;

    font-family: 'Abel', sans-serif;
opacity: .95;

}

form {
    width: 450px;
    min-height: 500px;
    height: auto;
    border-radius: 5px;
    margin: 2% auto;
    box-shadow: 0 9px 50px hsla(20, 67%, 75%, 0.31);
    padding: 2%;
    background-color:pink;
}

form .con {
    display: -webkit-flex;
    display: flex;
  
    -webkit-justify-content: space-around;
    justify-content: space-around;
  
    -webkit-flex-wrap: wrap;
    flex-wrap: wrap;
  
      margin: 0 auto;
}


header {
    margin: 2% auto 10% auto;
    text-align: center;
}

header h2 {
    font-size: 250%;
    font-family: 'Playfair Display', serif;
    color: #3e403f;
}

header p {letter-spacing: 0.05em;}



.input-item {
    background: #2D101A;
    color: #333;
    padding: 14.5px 0px 15px 9px;
    border-radius: 5px 0px 0px 5px;
}

input[class="form-input"]{
    width: 240px;
    height: 50px;
  
    margin-top: 2%;
    padding: 15px;
    
    font-size: 16px;
    font-family: 'Abel', sans-serif;
    color: #5E6472;
  
    outline: none;
    border: none;
  
    border-radius: 0px 5px 5px 0px;
    transition: 0.2s linear;
    
}
input[id="txt-input"] {width: 250px;}
/* focus  */
input:focus {
    transform: translateX(-2px);
    border-radius: 5px;
}


/* buttons  */
button {
    display: inline-block;
    color: #252537;
  
    width: 280px;
    height: 50px;
  
    padding: 0 20px;
    background: #fff;
    border-radius: 5px;
    
    outline: none;
    border: none;
  
    cursor: pointer;
    text-align: center;
    transition: all 0.2s linear;
    
    margin: 7% auto;
    letter-spacing: 0.05em;
}




/* buttons hover */
button:hover {
    transform: translatey(3px);
    box-shadow: none;
}

/* buttons hover Animation */
button:hover {
    animation: ani9 0.4s ease-in-out infinite alternate;
}
@keyframes ani9 {
    0% {
        transform: translateY(3px);
    }
    100% {
        transform: translateY(5px);
    }
}


</style>


<div class="overlay">
<form method="post"  action="admin.php" autocomplete="on">
   <div class="con">
   <header class="head-form">
      <h2>Log In</h2>
      <p>entra usando tu username y password</p>
   </header>

   <br>
   <div class="field-set">
     

         <span class="input-item">
           <i class="fa fa-user-circle"></i>
         </span>

         <input class="form-input" id="txt-input" type="text" placeholder="Username" name="Username" required>
     
      <br>
     
       
     
      <span class="input-item">
        <i class="fa fa-key"></i>
       </span>

      <input class="form-input" type="password" placeholder="Password" id="pwd"  name="Password" required>
     

     
     
      <br>
	  <?php
  if(isset($_GET['error'])) {
        echo "Username o password incorrecto";

    }
    ?>
	<br><br>

      <button class="log-in" name="login"> Log In </button>
   </div>
  

  </div>
  

</form>
</div>

</body>
</html>