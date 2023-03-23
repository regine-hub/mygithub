<?php
   session_start();

    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'regine';

    $connection = mysqli_connect($host, $user, $password, $database);

    if (mysqli_connect_error()) {
        echo 'error';
    }

    
?>