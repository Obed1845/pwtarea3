<?php
session_start();
if (!isset($_SESSION['numero_secreto'])) {
    $_SESSION['numero_secreto'] = rand(1, 10);
}
$mensaje = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $intento = (int)$_POST['adivinanza'];
    if ($intento === $_SESSION['numero_secreto']) {
        $mensaje = "<span style='color:green;'>¡Felicidades! Acertaste el número.</span>";
        unset($_SESSION['numero_secreto']);
    } else {
        $mensaje = "<span style='color:red;'>Incorrecto. Intenta de nuevo.</span>";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4</title>
    <style>body { font-family: Arial, sans-serif; }</style>
</head>
<body>
    <h1>Juego de Adivinanzas</h1>
    <p>He pensado un número entre el 1 y el 10. ¿Puedes adivinarlo?</p>
    <p><?php echo $mensaje; ?></p>
    <form method="post">
        <input type="number" name="adivinanza" min="1" max="10" required>
        <button type="submit">Adivinar</button>
    </form>
</body>
</html>