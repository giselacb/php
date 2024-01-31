<html>

<head>
  <title>Captura de datos del form</title>
</head>

<body>
  <?php
    echo "El nombre ingresado es: ";
    echo $_REQUEST['nombre'];
    echo "<br>La edad es: ";
    echo $_REQUEST['edad'];

    if ($_REQUEST['edad'] >= "18") {
        echo "<br>Es mayor de 18";
    } else {
        if ($_REQUEST['edad'] < "18") {
        echo "<br>Es menor de 18";
        }
    }
  ?>
</body>

</html>