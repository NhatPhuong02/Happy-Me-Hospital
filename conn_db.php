<?php
$mysqli = new mysqli("127.0.0.1","root","root","happyme", 8889);

if($mysqli -> connect_errno){
    header("location: db_error.php");
    exit(1);
}

define('SITE_ROOT',realpath(dirname(__FILE__)));
date_default_timezone_set('Asia/Ho_Chi_Minh');
?>