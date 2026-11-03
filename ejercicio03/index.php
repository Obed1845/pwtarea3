<?php
session_start();
if (!isset($_SESSION['visitas'])) {
    $_SESSION['visitas'] = 1;
} else {
    $_SESSION['visitas']++;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3</title>
    <style>body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }</style>
</head>
<body>
    <h1>Contador de Visitas en PHP</h1>
    <h2>Has visitado esta página <strong><?php echo $_SESSION['visitas']; ?></strong> veces durante esta sesión.</h2>
    <p>Recarga la página para aumentar el contador.</p>
</body>
</html>