<?php
// inicia sesión
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>ver</title>
	<style type="text/css">
	#lblusu{
		margin-left: 35%;
	}
	#cerrarsesion{
		margin-left: 10%;
	}
	fieldset{
		margin-left: 25%;
		width: 50%;
		color: grey;
	}
	h2{
		color: grey;
	}
	label{
		color: #999999;
	}

	</style>
</head>
<?php
echo "<form method='post' action='cerrarsesion.php'><label id=lblusu>USUARIO: ".$_SESSION['codigo']."</label><input type='submit' id='cerrarsesion' name='cerrarsesion' value='CERRAR SESI&Oacute;N' size='50'></form>";
?>
<body>
<fieldset>
<legend>DATOS</legend>
<?php
$Nombre = $_POST['txtName'];
$Telefono = $_POST['txtTelefono'];
$Celular = $_POST['txtCelular'];
$DOmicilio = $_POST['txtDomicilio'];
echo "<h2>NOMBRE:</h2> <label>".$Nombre."</label>";
echo "<h2>TEL&Eacute;FONO:</h2> <label>".$Telefono."</label>";
echo "<h2>CELULAR:</h2> <label>".$Celular."</label>";
echo "<h2>DOMICILIO:</h2> <label>".$DOmicilio."</label>";
?>

<br/>
<br/>

	
<a href="directorio.php">REGRESAR</a>
</fieldset>
</body>
</html>
