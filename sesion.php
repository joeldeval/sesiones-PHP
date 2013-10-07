<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicia Sesi&oacute;n</title>

	<style type="text/css">
	fieldset{
		margin-left: 37%;
		width: 20%;
		margin-top: 20%;
	}
	[required]{
		border-color: transparent;
		box-shadow: 0px 0px 5px blue;
	}

	</style>
</head>

<body>
<form method="POST" action="ini.php">
	<fieldset>
		<legend>LOGIN</legend>
		<label id="lblcodigo">C&oacute;digo</label><br/>
		<input type="text" name="codigo" id="txtcodigo" size="20" maxlength="10" required><br/>
		<label id="lblcontraseña">Contrase&ntilde;a</label><br/>
		<input type="password" name="contra" id="pass" size="20" maxlength="10" required><br/>
		<input type="submit" name="btnenviar" value="ENVIAR" required>
	</fieldset>
	</form>
</body>
</html>
