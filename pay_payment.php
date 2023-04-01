<?php

// after install the Omise PHP library
require_once 'vendor/autoload.php'; 

define('OMISE_PUBLIC_KEY', 'your_public_key');
define('OMISE_SECRET_KEY', 'your_secret_key');

$token = $_POST['omiseToken'];
$source = $_POST['omiseSource'];

?>

