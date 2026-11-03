<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1</title>
    <style>
        body { font-family: Arial, sans-serif; }
        ul { list-style: none; padding: 0; width: 200px; }
        .submenu { display: none; margin-left: 15px; background: #f0f0f0; }
        .submenu li { padding: 5px; }
        .main-menu { cursor: pointer; background: #007bff; color: white; padding: 10px; display: block; }
    </style>
</head>
<body>
    <ul>
        <li>
            <span class="main-menu" onclick="toggleMenu('sub1')">Opciones Avanzadas &#9662;</span>
            <ul id="sub1" class="submenu">
                <li>Configuración</li>
                <li>Privacidad</li>
                <li>Seguridad</li>
            </ul>
        </li>
    </ul>
    <script>
        function toggleMenu(id) {
            let el = document.getElementById(id);
            el.style.display = (el.style.display === 'block') ? 'none' : 'block';
        }
    </script>
</body>
</html>