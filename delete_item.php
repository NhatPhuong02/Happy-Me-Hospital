<?php
session_start();
include("conn_db.php");

if (!isset($_SESSION["id"])) {
    header("locatiom: signIn.php");
    exit(1);
}

$m_id = $_GET["m_id"];
$cartdelete_query = "DELETE FROM cart WHERE Medicine_m_id = {$m_id} AND User_u_id = {$_SESSION["id"]}";
$cartdelete_result = $mysqli->query($cartdelete_query);
if ($cartdelete_result) {
    header("location: user_cart.php?rs_del=1");
} else {
    header("location: user_cart.php?rs_del=0");
}

?>