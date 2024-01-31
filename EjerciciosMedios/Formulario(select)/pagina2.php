<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
  if ($_REQUEST['ingresos'] == "+3000") {
    echo "{$_REQUEST['valor1'] te toca pagar<br>";
  }
  else {
    echo "{$_REQUEST['valor1'] eres un crack, te libras de pagar";
  }
  ?>
</body>

</html>