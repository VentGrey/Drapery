<?php

//MARIADB es recomendado
//Cambie estos campos a su conveniencia para el uso de Drapery

if(isset($_POST['submit-email']) && $_POST['email']) {
    //Change this according to your database location & user
    mysql_connect('localhost', 'root','');
    mysql_select_db('sample'); //Change this to your current database
    $select = mysql_query(""); //Place your queries here

    if(mysql_num_rows($select) == 1) {
        while($row = mysql_fetch_array($select)) {
            $email = md5($row['email']);
            $pass = md5($row['password']);
        }
        $link = 'add your link button here';
        require_once('phpmail/PHPMailerAutoload.php'); //This can vary
        $mail = new PHPMailer();
        $mail -> CharSet = "utf-8";
    }
}