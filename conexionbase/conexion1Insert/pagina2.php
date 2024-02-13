<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

  function comprobacion($nombre,$mail,$codigocurso){

    if (!is_numeric($nombre) && (strpos($mail, "@") !== false) && is_numeric($codigocurso)) {
        $conexion = mysqli_connect("localhost", "root", "", "base1") or
        die("Problemas con la conexión");
        mysqli_query($conexion, "insert into alumnos(nombre,mail,codigocurso) values 
        ('$nombre','$mail',$codigocurso)")
        or die("Problemas en el select" . mysqli_error($conexion));
        mysqli_close($conexion);
        echo "El alumno fue dado de alta.";
        echo "Registrar otro alumno";
        echo '<br>
            <a href="pagina1.html">
                <button>Registrar otro</button>
             </a>';
      } else {
        echo "Los datos no son correctos";
        echo '<br>
            <a href="pagina1.html">
                <button>Volver a Registrarte</button>
             </a>';
      }

  }



  $nombre=$_REQUEST['nombre'];
  $mail=$_REQUEST['email'];
  $codigocurso=$_REQUEST['codigocurso'];

    comprobacion($nombre,$mail,$codigocurso);
    

  
?>
</body>
</html>