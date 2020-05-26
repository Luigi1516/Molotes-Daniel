<?php
 $servidor="localhost";
 $usuario="root";
 $clave="";
 $baseDeDatos="formulario";

 $enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

 if(!$enlace){  
 	echo"error";

 }


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"> 
        <title>Formulario De Registro</title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
	<div class="contenedor">
		<form action="#" class="formulario" id="formulario" name="formulario" method="POST">
			<div class="contenedor-inputs">
				<input type="text" name="nombre" placeholder="Nombre">
				<input type="text" name="apellido" placeholder="Apellido">
				<input type="email" name="correo" placeholder="Correo">
				<input type="text" name="nombreusu" placeholder="Usuario">


				<ul class="error" id="error"></ul>
			</div>

			<input type="submit" class="btn" name="registrarse" value="Registrate">
		</form>
		
	</div>
	<script src="formulario.js"></script>
</body>
</html>
<?php
if(isset($_POST['registrarse'])){
$nombre =$_POST["nombre"];
$apellido=$_POST["apellido"];
$correo=$_POST["correo"];
$nombreusu=$_POST["nombreusu"];

$insertarDatos="INSERT INTO datos VALUES('$nombre',
                                          '$apellido',
                                           '$correo',
                                            '$nombreusu')";

$ejecutarInsertar=mysqli_query($enlace, $insertarDatos);

 if(!$ejecutarInsertar){ 
 	echo "error en linea";

 }
}

?>