<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
  $acum=0;
  if (isset($_REQUEST['check1'])) {
    $acum++;
    }
  if (isset($_REQUEST['check2'])) {
    $acum++;
    }
  if (isset($_REQUEST['check3'])) {
    $acum++;
    }
  if (isset($_REQUEST['check4'])) {
    $acum++;
    }
  echo "El total de deportes que practica {$_REQUEST['valor1']} son $acum";
  ?>
</body>

</html>