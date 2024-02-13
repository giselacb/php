<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Crear una página web que muestre diferentes concatenaciones de datos. Se deben concatenar diferentes tipos de datos como booleanos, enteros, números de punto flotante (double)
     y cadenas (strings). Debe haber al menos dos concatenaciones diferentes, una que concatene un booleano y una cadena, y otra que concatene un número de punto flotante y un entero. -->
</head>
<body>
    
    <?php 

        $int= 15; 
        $bule= true;
        $double= 15.23;
        $string= "Gisela";
        echo "Concatenación de boolean y string <br>";
        echo $string." ".$bule;
        echo "<br>";
        echo "Concatenación de double e integer <br>";
        echo $double." ".$int;
        echo "<br>";
    ?>
</body>
</html>