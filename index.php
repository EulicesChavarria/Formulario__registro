<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>REGISTRO</h1>
    	<input type="text" name="name" placeholder="Nombre ">
	<input type="text" name="ape" placeholder="Apellido ">
	<input type="text" name="id" placeholder="ID ">
        <input type="text" name="date" placeholder="Fecha de nacimiento ">
    	<input type="email" name="email" placeholder="Correo">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("registrar.php");
        ?>
</body>
</html>