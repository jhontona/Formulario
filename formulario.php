<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario</title>
	<link rel="stylesheet" href="bootstrap.css">
</head>
<body>
	<form action="validar.php" method="post" class="table-bordered col-xs-3 well">
		<div class="form-group"><label for="nombre">Nombre: </label><input class="form-control" type="text" name="nombre" id="nombre" required placeholder="Tu nombre" /></div>
		<div class="form-group"><label for="email">Email: </label><input class="form-control" type="email" name="email" id="email" required placeholder="tucorreo@gmail.com" /></div>
		<div class="form-group"><label for="telefono">Telefono:</label><input class="form-control" type="text" name="telefono" id="telefono" required placeholder="telefono: 7777777" /></div>
		<div class="form-group"><label for="mensaje">Mensaje: </label><textarea class="form-control" required name="mensaje" id="mensaje" placeholder="Tu mensaje aqui" ></textarea></div>
		<?php
			require_once('recaptchalib.php'); 
			$pubkey = "6Le_X-sSAAAAACkgChoz9pIIPTWu5zGNjdUjxGpx"; 
			echo "<center>" . recaptcha_get_html($pubkey) . "</center>"; 
		?>
		<input type="submit" value="enviar" class="btn btn-danger btn-lg col-md-offset-5"> 
	</form>
</body>
</html>