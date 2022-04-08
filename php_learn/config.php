<?php
// defining database requirement

define('DB_server', 'localhost');
define('DB_user', 'root');
define('DB_password', '');
define('DB_name', 'demo');

//creating connection

$link = mysqli_connect(DB_server,DB_user,DB_password,DB_name);
if(!$link){
    die(mysqli_connect_errno($link));
}

?>