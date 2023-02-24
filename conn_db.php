<?php
    session_start();


    // path to the config file
    // same as include '../config/config.php';
    
    $config_path = __DIR__ . '/../config/config.php';

    // include the config file
    require_once $config_path;

    $mysqli = new mysqli(
        $db_host,
        $db_user,
        $db_password,
        $db_db,
        $db_port
    );


    if ($mysqli->connect_error) {
        echo 'Errno: '.$mysqli->connect_errno;
        echo '<br>';
        echo 'Error: '.$mysqli->connect_error;
        exit();
    }
?>


