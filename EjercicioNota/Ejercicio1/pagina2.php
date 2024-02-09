<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if ( $_REQUEST['asignatura'] == 'ASO' ) {
            echo $_REQUEST['asignatura'] . " lo imparte Fran";
        }
        else {
            echo $_REQUEST['asignatura'] . " lo imparte Reyes";
        }
    ?>
</body>
</html>