<?php
$directorio = "img/";
if (!is_dir($directorio)) {
    mkdir($directorio);
}
$imagenes = glob($directorio . "*.{jpg,jpeg,png,gif,webp}", GLOB_BRACE);
if (empty($imagenes)) {
    $imagenes = [
        "https://via.placeholder.com/300x200/FF5733/FFF?text=Imagen+1",
        "https://via.placeholder.com/300x200/33FF57/FFF?text=Imagen+2",
        "https://via.placeholder.com/300x200/3357FF/FFF?text=Imagen+3",
        "https://via.placeholder.com/300x200/F033FF/FFF?text=Imagen+4"
    ];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .galeria { display: flex; flex-wrap: wrap; gap: 15px; }
        .galeria img { width: 300px; height: 200px; object-fit: cover; border-radius: 8px; border: 2px solid #ccc; }
    </style>
</head>
<body>
    <h1>Galería Dinámica</h1>
    <div class="galeria">
        <?php foreach ($imagenes as $img): ?>
            <img src="<?php echo $img; ?>" alt="Elemento de galería">
        <?php endforeach; ?>
    </div>
</body>
</html>