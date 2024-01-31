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
        if (!is_numeric($nombre) && (strpos($mail, "@") !== false)) {
            $conexion = mysqli_connect("localhost", "root", "", "base1") or
            die("Problemas con la conexión");
            mysqli_query($conexion, "insert into alumnos(nombre,mail,codigocurso) values 
            ('$nombre','$mail',$codigocurso)")
            or die("Problemas en el select" . mysqli_error($conexion));
            mysqli_close($conexion);
            echo "El alumno fue dado de alta.";
            header('Location: pagina3.html');
            exit();
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
  $veces=$_REQUEST['numerico'];
  if ($veces > 1) {
    for ($i = 0; $i < $veces; $i++) {
        comprobacion($nombre, $mail, $codigocurso);
    }
} 
  

  
?>
</body>
</html>