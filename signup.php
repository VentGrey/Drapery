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
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

    <!--CSS Inclusion-->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!--Import Material icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Fonts Inclusion-->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,700" rel="stylesheet">


    <!--JS & Others inclusion-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>

    <title> Sign Up - Drapery </title>

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
            <form class="form-group main-window">
                <div class="container">
                    <img src="img/drapery-pop.png" width="100" height="100" class="rounded float-left align-middle" alt="Drapery">
                </div>
                <h1 class="registro display-4" align="center"> Registro </h1>
                <p class="advice" align="center"> Por favor complete complete los campos del formulario para darse de alta. </p>
                <hr>
                <p>
                    <div class="container rad" align="center">
                        <label class="sign-field" align="center"> Registrarse como: </label>
                        <input type="radio" name="permission" value="Docente" required> Docente
                        <input type="radio" name="permission" value="Alumno" required> Alumno
                    </div>
                </p>
                <label class="sign-field" for="email"><b>Correo electrónico</b></label>
                <input type="text" class="form-control" placeholder="Ingrese su correo aquí" name="email" required>
                <br>
                <label class="sign-field" for="psw"><b>Contraseña</b></label>
                <input type="password" class="form-control" placeholder="Ingrese su contraseña" name="psw" required>
                <br>
                <label class="sign-field" for="psw-repeat"><b>Repetir contraseña</b></label>
                <input type="password" class="form-control" placeholder="Repeat Password" name="psw-repeat" required>
                <br>
                <label class="sign-field">
                    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Recordar mi contraseña
                </label>
                <br>
                <div>
                    <button type="button" onclick="window.location.href='/index.php'" class="cancelbtn">Cancelar</button>
                    <button type="submit" class="signupbtn btn btn-info">Registrarme</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
