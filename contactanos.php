<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contáctanos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="contactanos.css">
</head>
<body class="bg-dark">
	


	
	<div class="container-fluid bg-dark d-flex ">
    <div class="container-fluid d-flex">
  	<nav class="navbar navbar-dark bg-dark nav-fill">



  <div class="container-fluid justify-content-start ">
    <span class="navbar-brand mb-0 h1">Dark Souls</span>
    

</nav>
</div>
<div class="container-fluid d-flex justify-content-end pt-3">
 <div><a class="enlacesmenu link-secondary textnav" href="Trabajofinalhome.html"><span>Home</span></a></div>

  <div class=""><a class="enlacesmenu link-secondary textnav" href="Curiosidades.html"><span>Curiosidades</span></a></div>

  <div><a class="enlacesmenu link-secondary textnav" href="otrosjuegos.html"><span>Otros Juegos</span></a></div>

  <div><a class="enlacesmenuc link-secondary textnav" href="contactanos.php"><span>Contáctanos</span></a></div>
</div>


</div>
	
	<div class="container-fluid bg-dark w-50">
	<form method="post" action="/registrar.php">	

		<h5 class="textocaja">Introduce tu email</h5>
		<input type="text" name="email" class="inputs">
		<h5 class="textocaja2">Introduce tu mensaje</h5>
		<input type="text" name="texto" class="inputst">
		
    
 		<div class=" mt-2"><input type="submit" name="mensaje" class="boton"></div>
	</form>
	<div class="container-fluid bg-dark d-flex justify-content-center"><div><img src="cuevita.gif" class="cuevita"></div></div>
	
	<div class="container-fluid bg-dark justify-content-center">
		<div>
	<form action="https://formsubmit.co/ivan.omiguel49@gmail.com" method="POST">
     <input type="email" name="email" required class="textocaja">
     <input type="text" name="texto" required class="textocaja2">
     <button type="submit">Send</button>
	</div>
	</div>
	<hr><hr><hr><hr>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<?php
	
	include("registrar.php");

	 ?>
	

</body>
</html>