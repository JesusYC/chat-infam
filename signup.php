<!DOCTYPE html>
<html>
<head>
	<title>INFAM Perú</title>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
	#signup_form{
		width:350px;
		height:430px;
		position:relative;
		top:50px;
		margin: auto;
		padding: auto;
	}
</style>
</head>
<body>
<div class="container">
	<div id="signup_form" class="well">
		<h2><center><span class="glyphicon glyphicon-user"></span> Registrarse</center></h2>
		<hr>
		<form method="POST" action="register.php">
		Nombre: <input type="text" name="name" class="form-control" required>
		<div style="height: 10px;"></div>
		Nombre de usuario: <input type="text" name="username" class="form-control" required>
		<div style="height: 10px;"></div>		
		Contraseña: <input type="password" name="password" class="form-control" required> 
		<div style="height: 10px;"></div>

		<div style="height: 10px;">
	<div class="g-recaptcha" data-sitekey="6Lf95NAfAAAAAHKc0Cysvv9iwsqImGZlZVJApFwV"></div>
	
	</div><br><br><br><br>

		<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Registrarse</button> <a href="index.php"> Rregresar</a>
		</form>
		<div style="height: 15px;"></div>
		<div style="color: red; font-size: 15px;">
			<center>
			<?php
				session_start();
				if(isset($_SESSION['sign_msg'])){
					echo $_SESSION['sign_msg'];
					unset($_SESSION['sign_msg']);
				}
			?>
			</center>
		</div>
	</div>
</div>
</body>
</html>