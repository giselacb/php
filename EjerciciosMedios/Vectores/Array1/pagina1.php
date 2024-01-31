<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Definir un vector con los nombres de los días de la semana. Luego imprimir el primero y el último elemento del vector. -->
</head>
<body>
    <?php
        $dias=array("Lunes", "Martes","Miércoles","Jueves","Viernes","Sábado","Domingo");

        foreach ($dias as $dia) {
            echo $dia;
            echo "<br>";
        }
        echo "El primer elemento es: " . $dias[0]; 
        echo "<br>";
        echo "El útlimo elemento es: " . $dias[6];
    
    ?>
</body>
</html>