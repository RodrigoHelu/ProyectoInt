<?php

$dsn = "mysql:host=127.0.0.1;dbname=redsocial_db";
$user = "root";
$pass = "";

try {
  $pdo = new PDO($dsn, $user, $pass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (\Exception $e) {
  echo "Error al conectar con la BD: " . $e->getMessage() . "<br>";exit;
}


 ?>
