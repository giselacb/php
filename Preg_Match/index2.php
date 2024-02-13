<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de Formulario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .message {
            margin-top: 10px;
            padding: 10px;
            border-radius: 4px;
        }

        .success {
            background-color: #d4edda;
            border-color: #c3e6cb;
            color: #155724;
        }

        .error {
            background-color: #f8d7da;
            border-color: #f5c6cb;
            color: #721c24;
        }
    </style>
</head>

<body>
    <?php
    //Código postal de Málaga
    if (preg_match('/^29[0-9]{3}$/', $_POST['cod'])) {
        echo '<div class="message success">' . $_POST['cod'] . ' Has puesto bien el código postal</div>';
    } else {
        echo '<div class="message error">Has puesto mal el código postal</div>';
    }
    //Número entero
    if (preg_match('/^-?[0-9]+$/', $_POST['numen'])) {
        echo '<div class="message success">' . $_POST['numen'] . ' Has puesto bien el número entero</div>';
    } else {
        echo '<div class="message error">Has puesto mal el número entero</div>';
    }
    //Número con decimales
    if (preg_match('/^-?[0-9]+(\.[0-9]+)?$/', $_POST['numde'])) {
        echo '<div class="message success">' . $_POST['numde'] . ' Has puesto bien el número con decimales</div>';
    } else {
        echo '<div class="message error">Has puesto mal el número con decimales</div>';
    }
    //Fecha
    if (preg_match('/^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$/', $_POST['fecha'])) {
        echo '<div class="message success">' . $_POST['fecha'] . ' Has puesto bien la fecha</div>';
    } else {
        echo '<div class="message error">Has puesto mal la fecha</div>';
    }
    //Email
    if (preg_match('/^[a-zA-Z0-9]+[a-zA-Z0-9_\-]*@[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/', $_POST['email'])) {
        echo '<div class="message success">' . $_POST['email'] . ' Has puesto bien el correo electrónico</div>';
    } else {
        echo '<div class="message error">Has puesto mal el correo</div>';
    }
    //URL
    if (preg_match('/^(http|https):\/\/[a-zA-Z0-9.-]+\.[a-zA-Z]{2,3}(\/\S*)?$/', $_POST['url'])) {
        echo '<div class="message success">' . $_POST['url'] . ' Has puesto bien la URL</div>';
    } else {
        echo '<div class="message error">Has puesto mal la URL</div>';
    }
    ?>
    </div>
</body>

</html>