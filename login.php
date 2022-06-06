<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Dlogin</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/stylo.css">
</head>
<body>
<?php /* ------------- require 'partials/header.php'  --------*/?>
    <h1>Login</h1>
    <span>or <a href="registro.php">registrate</a></span>

    <form action="login.php" method="post">
    <input type ="text" name="Nombre" placeholder="ingrese su nombre">
    <input type="password" name="password" placeholder="ingrese la contraseña">
    <input type="submit" value="Send">  
    </form>
</body>
</html> 