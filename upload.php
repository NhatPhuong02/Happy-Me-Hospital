<?php
session_start();
include("conn_db.php");
$target_dir = "img/avatar/";
// Check if image file is a actual image or fake image
$temp = explode(".", $_FILES["fileToUpload"]["name"]);
$target_newfilename = $_SESSION["id"] . "." . strtolower(end($temp));
$target_file = $target_dir . $target_newfilename;
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
  $update_query = "UPDATE user SET u_avatar = '{$target_newfilename}' WHERE u_id = {$_SESSION["id"]}";
  $update_result = $mysqli->query($update_query);
  $_SESSION["avatar"] = $target_newfilename;
} else {
  $update_result = false;
}
if ($update_result) {
  header("location: user_profile.php?up_prf=1");
} else {
  header("location: user_profile.php?up_prf=0");
}
?>