<?php
session_start();
$usuarios = [
    "admin" => "12345",
    "estudiante" => "pwa2026"
];
$mensaje = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = trim($_POST['user']);
    $pass = trim($_POST['pass']);
    if (isset($usuarios[$user]) && $usuarios[$user] === $pass) {
        $_SESSION['logueado'] = $user;
    } else {
        $mensaje = "<p style='color:red;'>Credenciales incorrectas.</p>";
    }
}
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 6</title>
    <style>body { font-family: Arial, sans-serif; }</style>
</head>
<body>
    <?php if (isset($_SESSION['logueado'])): ?>
        <h1>Bienvenido al sistema, <?php echo htmlspecialchars($_SESSION['logueado']); ?></h1>
        <a href="index.php?logout=1"><button>Cerrar Sesión</button></a>
    <?php else: ?>
        <h1>Iniciar Sesión</h1>
        <?php echo $mensaje; ?>
        <form method="post">
            <input type="text" name="user" placeholder="Usuario (ej. admin)" required><br><br>
            <input type="password" name="pass" placeholder="Contraseña (ej. 12345)" required><br><br>
            <button type="submit">Ingresar</button>
        </form>
    <?php endif; ?>
</body>
</html>