<?php
session_start();
require_once('config.php');


if ( $config['login'] == $_REQUEST['login'] and $config['passw'] == $_REQUEST['passw']) {
    $_SESSION['auth'] = 1;
}
 else
 {
     echo "Auth error. Go to <a href='/'>main page</a><br><br>";
     exit();
}


header("Location: /");


?>