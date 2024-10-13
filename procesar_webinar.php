<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Procesados</title>
</head>
<body>
    <h1>Registro procesado</h1>
    <?php
    $nombre =isset ($_POST['nombre'])? $_POST['nombre']: "Campo Vacio";
    $correo = isset ($_POST['correo'])? $_POST['correo']: "Campo Vacio";
    $telefono =isset ($_POST['telefono'])? $_POST['telefono']: "Campo Vacio";
    $fuente = isset ($_POST['fuente'])? $_POST['fuente']: "No selecciono ninguna opcion";
    $tema =isset($_POST['tema'])? $_POST['tema']: "No selecciono ningun tema";
    $opciones =isset ($_POST['opciones'])? implode(",", $_POST['opciones']): "No selecciono ningun opcion";
    $comentarios = isset($_POST['comentarios'])? $_POST['comentarios']: "Campo Vacio";

    echo "<p><strong>Nombre Completo:</strong> $nombre</p>";
    echo "<p><strong>Correo Electrónico:</strong> $correo</p>";
    echo "<p><strong>Teléfono:</strong> $telefono</p>";
    echo "<p><strong>¿Cómo te enteraste del webinar?</strong>$fuente</p>";
    echo "<p><strong>Tema de Interés:</strong>$tema</p>";
    echo "<p><strong>Opciones de Participación:</strong>$opciones</p>";
    echo "<p><strong>Comentarios o preguntas:</strong> $comentarios</p>";
    
    ?>
</body>
</html>