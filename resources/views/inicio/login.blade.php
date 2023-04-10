<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="https://administracionparqueo-production.up.railway.app/AdministracionParqueo/resources/css/loginstyle.css"">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="fondo" src="https://administracionparqueo-production.up.railway.app/AdministracionParqueo/resources/img/autofondo.png">
	<div class="container">
		<div class="img">
			<img src="http://localhost:8080/AdministracionParqueo/resources/img/mujerauto.svg">
		</div>
		<div class="login-content">
			<form action="aqui va la funcion de donde botara cuando aprete login">
				<img src="https://administracionparqueo-production.up.railway.app/AdministracionParqueo/resources/img/avatar.svg">
				<h2 class="title">Bienvenido</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Usuario</h5>
           		   		<input type="text" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Contraseña</h5>
           		    	<input type="password" class="input">
            	   </div>
            	</div>
            	<a href="#">Olvidaste Tu Contraseña?</a>
            	<input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="http://localhost:8080/AdministracionParqueo/resources/js/login.js""></script>
</body>
</html>