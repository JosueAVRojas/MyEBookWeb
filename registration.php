<!DOCTYPE html>
<html>

<head>
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<link rel="stylesheet" href="./css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<title>Registro</title>

</head>

<body class="body-reg">
	<div class="contregistro">
		<div class="foto">
			<img src="../MyEBookWeb/img/registro/registro.jpg">
		</div>
		<div class="usuario-form">
			<h1>REGÍSTRATE!</h1>
			<form method="post" action="./registro.php">
				<p>Usuario:</p>
				<i class="form-usuario"></i>
				<input type="text" id="usuario" name="usuario" placeholder="Usuario" required>
				<p>Teléfono:</p>
				<i class="form-telefono"></i>
				<input type="tel" id="tel" name="telefono" placeholder="Teléfono" required>
				<p>Correo Electrónico:</p>
				<i class="form-correo"></i>
				<input type="email" id="correo" name="correo" placeholder="Correo electrónico" require>
				<p>Contraseña:</p>
				<i class="form-contra"></i>
				<input type="password" id="contra" name="contra" placeholder="Contraseña" required>
				<div class="accion_btn">
					<button type="submit" class="btn_crear">Registrarse</button>
				</div>
				<div>
					<h6>¿Ya te registraste? <a href="./login.html">Inicia Sesión</a> en tu cuenta</h6>
				</div>
			</form>
		</div>
	</div>
</body>

</html>