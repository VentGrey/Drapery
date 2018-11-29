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

    <!--CSS Inclusion-->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!--Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

    <!--Fonts Inclusion-->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,700" rel="stylesheet">

    <!--Fancy Icons-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

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

                <label class="sign-field" align="center"> Registrarse como: </label>
                <input type="radio" name="permission" value="Docente" required> Docente

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
                <p class="advice">Al crear una cuenta estás de acuerdo con nuestros<a href="#" style="color:#48B9C7"> términos & política de privacidad</a>.</p>

                <div>
                    <button type="button" action="index.php" class="cancelbtn">Cancelar</button>
                    <button type="submit" class="signupbtn btn btn-info">Registrarme</button>
                </div>
            </form>
        </div>
    </div>
    <!--Bootstrap JavaScript-->
    <link rel="script" href="bootstrap/js/bootstrap.bundle.min.js">

    <!--Bootstrap Dependencies-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</body>
<?php include 'footer.php'; ?>
</html>
