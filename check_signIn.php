<?php
  session_start(); include ('conn_db.php');

  // include ('variables_list.php');

  $signin_path = __DIR__ . 'signIn.php';

  // khai bao bien de luu su dung sau nay
  // $u_firstname = '';

  $u_email = $_POST['u_email'];
  $u_password = $_POST['u_password'];
  
  // Check if the user is already logged in
  // if (isset($_SESSION['loggin_in']) && isset($_SESSION['loggid_in']) == true) {
    
  //   header("Location: test.php");
    
  //   exit();
  // }

  // my condition
  if (isset($_POST['u_email']) && isset($_POST['u_password'])) {

    // avoid sql injection: https://www.w3schools.com/php/php_mysql_prepared_statements.asp
    $query = $mysqli->prepare("SELECT u_id, u_firstName, u_lastName, u_email, u_password, u_phone, u_gender, u_address, u_avatar FROM User WHERE u_email = ?");
    $query->bind_param("s", $u_email);
    $query->execute();
    $result = $query->get_result();

    if ($result->num_rows > 0) {
      $row = $result->fetch_array();

      if (password_verify($u_password, $row['u_password'])) {
        
        $_SESSION['firstName'] = $row['u_firstName'];
        $_SESSION['lastName'] = $row['u_lastName'];
        $_SESSION['email'] = $row['u_email'];
        $_SESSION['id'] = $row['u_id'];
        $_SESSION['phone']= $row['u_phone'];
        $_SESSION['gender']= $row['u_gender'];
        $_SESSION['address']= $row['u_address'];
        $_SESSION['avatar']= $row['u_avatar'];


        $_SESSION['last_activity'] = time();

        // set cookies
        setcookie('u_id', $row['u_id'], time() + 3600);
        setcookie('u_firstName', $row['u_firstName'], time() + 3600);

        header("Location: index.php");

        exit();
      } else {
        echo "Login failed. Incorrect email or password.";
        
      }
    } else {
      echo "Login failed. Incorrect email or password.";
    }
  } else {
    echo "Email or password is blank."; 
  }

  $mysqli->close();

?>


