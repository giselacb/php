<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Crear una página web que muestre un mensaje diferente dependiendo del día del mes. Si el día del mes es igual o menor que 10, la página debe mostrar el mensaje "sitio activo".
     De lo contrario, si el día del mes es mayor que 10, la página debe mostrar el mensaje "sitio fuera de servicio". -->
</head>

<body>
    <?php
    $dia = date("d");
    if ($dia <= 10) {
        echo "sitio activo";
    } else {
        echo "sitio fuera de servicio";
    }
    ?>
</body>

</html>