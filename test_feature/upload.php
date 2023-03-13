<?php
  session_start();
  include ("../conn_db.php");

  // source: https://www.w3schools.com/php/php_file_upload.asp




  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Check if image file is a actual image or fake image
  if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "File is not an image.";     // case 1
      $uploadOk = 0;
    }
  }

  // Check if file already exists
  if (file_exists($target_file)) {
    echo "Sorry, file already exists."; // case 2
    $uploadOk = 0;
  }

  // Check file size 500000 mb
  if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large."; // case 3
    $uploadOk = 0;
  }

  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed."; // case 4
    $uploadOk = 0;
  }

  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded."; // case 5
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";

    // get _SESSION[id, User_id]


      $u_avatar = $_FILES["fileToUpload"]["name"];

      $query = $mysqli->prepare("UPDATE User SET u_avatar = ? WHERE u_id = ?");
      // UPDATE User SET u_avatar = "test" WHERE u_id = 6
      $query->bind_param("ss", $u_avatar, $u_id);
      $query->execute();
      $result = $query->get_result();

      if ($result->num_rows > 0) {
        $row = $result->fetch_array();
      }

    // this is for testing  
  $_SESSION['i_name'] = $row['u_avatar'];
  echo $_SESSION['i_name'];



    } else {
      echo "Sorry, there was an error uploading your file.";
    }
}
?>