<?php

//MARIADB es recomendado
//Cambie estos campos a su conveniencia para el uso de Drapery

if(isset($_POST['submit-email']) && $_POST['email']) {
    //Cambie esto dependiendo de su DBMS y su usuario
    mysql_connect('localhost', 'root','');
    mysql_select_db('sample'); //Coloque aquí su base de datos
    $select = mysql_query(""); //Las consultas van aquí

    if(mysql_num_rows($select) == 1) {
        while($row = mysql_fetch_array($select)) {
            $email = md5($row['email']);
            $pass = md5($row['password']);
        }
        $link = 'add your link button here';
        require_once('phpmail/PHPMailerAutoload.php'); //Esto puede variar
        $mail = new PHPMailer();
        $mail -> CharSet = "utf-8";
        $mail -> IsSMTP();
        // Autenticación por SMTP
        $mail -> SMPAuth = true;

        // Ponga sus datos aquí
        $mail -> Username = "example@example.exa";

        $mail -> Password = "superstrongpassword";
        $mail -> SMTPSecure = "ssl";

        // ELija su servidor SMTP, el default es gmail
        $mail -> Host = "smtp.gmail.com";
        // Puerto del servidor (Gmail en este caso)
        $mail -> Port = "465";
        // Datos que se fijarán dento del correo
        $mail -> From = 'tu_id_de_gmail@gmail.com';
        $mail -> FromName = 'tu_nombre';
        $mail -> AddAddress('id_destinatario', 'nombre_destinatario');
        $mail -> Subject = 'Nueva contraseña';
        $mail -> IsHTML(true);
        $mail -> Body = 'Cuerpo del mensaje';
    }
}