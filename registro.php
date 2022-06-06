<?php

  require 'database.php';

  $message = '';

  if (!empty($_POST['Nombre']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users (Nombre, password) VALUES (:Nombre, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

  if($stmt-> ())
    {
      $message = 'Successfully created new user';
    } else {
      $message = 'Sorry there must have been an issue creating your account';
    }
  }
?>

<!DOCTYPE html>
 
<html>
<head>
    <meta charset="UTF-8">
    
    <title>registrate</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/stylo.css">


</head>
<body>
<?php require 'partials/header.php' ?>

<?php if(!empty($message)):?>
<p><?php $message?></p>
<?php endif; ?>

<h1>registro</h1>
<span>or <a href="login.php">Loginb</a></span>

<form action="registro.php" method="post">
    <input type ="text" name="Nombre" placeholder="ingrese su nombre">
    <input type="password" name="password" placeholder="ingrese la contraseña">
    <input type="password" name="confirme_con traseña"placeholder="confirmar contraseña">
    <input type="submit" value="Send">  
</form>


</body>
</html>