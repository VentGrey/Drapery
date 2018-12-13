<!DOCTYPE html>
<html lang="es">

<head>
    <!--Meta attributes-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


    <!--Bootstrap CDN (WARNING: THIS IS REMOTE, MAY FAIL WITHOUT CONNECTION)-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!--CSS Inclusion-->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!--Import Material icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <!--Fonts Inclusion-->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,700" rel="stylesheet">

    <title> Recover Password - Drapery </title>

    <!--Favicons-->
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="img/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="json/manifest.json">

</head>

<body class="index">
    <div class="father-div">
        <div class="container">
            <form  method="post" action="send-link.php" class="form-group main-window">
                <div class="container">
                    <img src="img/drapery-pop.png" width="100" height="100" class="rounded float-left align-middle" alt="Drapery">
                </div>
                <h1 class="registro display-4" align="center">¿Olvidaste tu contraseña?</h1>
                <p class="advice" align="center">Para recuperar tu contraseña ingresa tu dirección de correo electrónico.</p>
                <hr>
                <label class="sign-field" for="email"><b>Correo electrónico</b></label>
                <input type="text" class="form-control" placeholder="Ingrese su correo aquí" name="email" required>
                <br>
                <div class="container">
                    <button type="submit" class="recoverbtn btn btn-info" name="submit-email">Recuperar contraseña</button>
                </div>
            </form>
        </div>
    </div>

</body>
