<!DOCTYPE html>
<html>

<head>
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<link rel="stylesheet" href="./css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<title>Inicio de Sesión</title>
</head>
<body class="body-log">
	<div class="contlogin">
		<div class="usuario-form-log">
			<h1>¡Iniciar Sesión!</h1>
			<form id="form" action="./valida.php" method="post">
				<p>Correo electrónico:</p>
				<i class="form-correo-log"></i>
				<input type="email" id="correo-log" name="correo" placeholder="Correo electrónico" required onblur="validarCorreo();">  
				<p>Contraseña:</p>
				<i class="form-contra-log"></i>
				<input type="password" id="contra-log" name="contra" placeholder="Contraseña" required>
				<div class="accion_btn_log">
					<button class="btn_login-log">Iniciar Sesión</button>
				</div>
				<div>
					<h6>¿Eres nuevo en MyEBook? <a href="./registration.html">Regístrate</a></h6>
				</div>
			</form>
		</div>
		<div class="foto-log">
			<img src="../MyEBookWeb/img/login/fondo.jpg">
		</div>
	</div>
</body>
<script src="../MyEBookWeb/js/main.js"></script>