<?php



	

	if (isset($mensaje)) {
	$email=$_POST['email'];
	$texto=$_POST['texto'];
	$mensaje=$_POST['mensaje'];
	$servidor="mysql-5706.dinaserver.com";
	$usuario="marca_";
	$contrasenia="Serpent7054";
	$base="marca2";
	$con=mysqli_connect($servidor,$usuario,$contrasenia,$base) or die ('Error en la conexion con el servidor');
	$sql="INSERT INTO consultas VALUES('$email', '$texto');




	$resultado=mysqli_query($con,$sql) or die ("Error en el query database");

	echo "Tu mensaje ha sido enviado, vuelva atras para regresar a la pagina";







	mail($email, 'hola', 'correo de prueba', 'From:marcasivds@marcasivds.com');

};

?>