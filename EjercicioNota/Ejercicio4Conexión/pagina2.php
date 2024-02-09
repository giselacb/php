<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $nom=$_REQUEST['nombre'];
    $ape1=$_REQUEST['ap1'];
    $ape2=$_REQUEST['ap2'];

    $conexion = mysqli_connect("localhost", "root", "", "mibasededatos") or
        die("Problemas con la conexión");

    mysqli_query($conexion, "insert into mitabla(Nombre, PriApellido, SeguApellido) values 
        ('$nom','$ape1','$ape2')")
        or die("Problemas en el select" . mysqli_error($conexion));

    echo"Todo perfecto";


    ?>
</body>

</html>