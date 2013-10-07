<?php
// inicia sesión
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>nuevo</title>
	<style type="text/css">
	#lblusu{
		margin-left: 45%;
	}
	#cerrarsesion{
		margin-left: 3%;
		background-color: white;
		color: grey;
	}
	#guardar{
		background-color: white;
		color: grey;
	}
	fieldset{
	margin-left: 25%;
	width: 50%;
}

	[required]{
		border-color: white;
		box-shadow: 0px 0px 5px green;
	}
	/*:invalid{
		border-color: white;
		box-shadow: 0px 0px 10px red;
	};*/

	</style>
</head>
<?php
echo "<form method='post' action='cerrarsesion.php'><label id=lblusu>USUARIO: ".$_SESSION['codigo']."</label><input type='submit' id='cerrarsesion' name='cerrarsesion' value='CERRAR SESI&Oacute;N' size='50'></form>";
?>
<body>
<fieldset>
	<legend>NUEVO CONTACTO</legend><br/><br/>
	<form method="post" action="ver.php">
	<label id="lblNombre">NOMBRE</label><br/>
	<input type="text" id="txtNombre" name="txtName" value="" required ><br/><br/>

	<label id="lblTelefono">T&Eacute;LEFONO</label><br/>
	<input type="text" id="txtTelefono" name="txtTelefono" value="" required><br/><br/>

	<label id="lblCelular">CELULAR</label><br/>
	<input type="text" id="txtCelular" name="txtCelular" value="" required><br/><br/>
	<label id="lblDomicilio">DOMICILIO</label><br/>
	<input type="text" id="txtDomicilio" name="txtDomicilio" value="" required><br/><br/><br/>

	<input type="submit" id="guardar" name="guardar" value="Guardar">
		
	</form>
	</fieldset>
</body>
</html>
