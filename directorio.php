<?php
// inicia sesión
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Sesi&oacute;n</title>
	<style type="text/css">
	#lblusu{
		margin-left: 32%;
	}
	#cerrarsesion{
		margin-left: 2%;
		width: 20%;
		background-color: white;
		color: grey;
		margin-top: -8%;
		
	}
	#usu{
		color: #555555;
		font-size: 100%;
		margin-left: 37%;

	}

	
	#nuevo{
			
		font-size: 190%;
		margin-left: 40%;
		background-color: white;
		margin-top: 20%;
		color: grey;
		
	}

	</style>
</head>
<body>

<?php
  echo "<form method='post' action='cerrarsesion.php'><label id=lblusu>USUARIO: ".$_SESSION['codigo']."</label><input type='submit' id='cerrarsesion' name='cerrarsesion' value='CERRAR SESI&Oacute;N' size='50'></form>";
 echo" <form method='post' action='nuevo.php'>	<input type='submit' id='nuevo' name='nuevo' value='NUEVO' size='50'></form>";
?>
</body>
</html>
