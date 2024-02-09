<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $empresa = ["Freepik", "Dekra", "Hispasec", "Itera"];
        $pos=0;
        foreach ($empresa as $valor) {
            if ($pos == 2) {
                echo "$valor";
            }
            $pos++;
        }
    ?>
</body>
</html>