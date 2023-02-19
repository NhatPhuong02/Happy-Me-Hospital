<?php
    // session_start();

    // include '../config/config.php';

    // path to the config file
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

    //     // Set DSN (Data Source Name)
    // $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;

    // // Create a PDO instance
    // $pdo = new PDO($dsn, $user, $password);


    if ($mysqli->connect_error) {
        echo 'Errno: '.$mysqli->connect_errno;
        echo '<br>';
        echo 'Error: '.$mysqli->connect_error;
        exit();
    }
?>


