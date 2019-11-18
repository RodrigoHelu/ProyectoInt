<?php
include("pdoRedSocial.php");

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$usuario = $_POST["usuario"];
$email = $_POST["email"];
$password = password_hash( $_POST['password'], PASSWORD_DEFAULT);

$consulta = $pdo->prepare("INSERT INTO usuarios VALUES(:nombre, :apellido, :usuario, :email, :password)");

$consulta->bindValue(":nombre", $nombre);
$consulta->bindValue(":apellido", $apellido);
$consulta->bindValue(":usuario", $usuario);
$consulta->bindValue(":email", $email);
$consulta->bindValue(":password", $password);

$consulta->execute();
 ?>
