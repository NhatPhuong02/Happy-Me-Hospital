<?php
  session_start();
  include ('conn_db.php');

  $signup_path = __DIR__ . 'signUp.php';



  // Check if the form has been submitted
  if (isset($_POST['submit'])) {
    // Get the form data
    $u_firstname = $_POST['u_firstname'];
    $u_lastname = $_POST['u_lastname'];
    $u_email = $_POST['u_email'];
    $u_password = $_POST['u_password'];
    $u_gender = $_POST['u_gender'];
    $u_phone = (int)$_POST['u_phone'];
    $u_role = 'patient';
    echo 'good1'; // ok
    $_SESSION['firstName'] = $_POST['u_firstname'];
    $_SESSION['lastName'] = $_POST['u_lastname'];
    $_SESSION['email'] = $_POST['u_email'];
    $_SESSION['gender'] = $_POST['u_gender'];
    $_SESSION['phone'] = (int)$_POST['u_phone'];

    // Check if the email is valid
    // if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //   echo 'Invalid email format';
    // } else {
      // delete because it's hard for testing

      // note: check again

      // Check if the email already exists
    $stmt = $mysqli->prepare("SELECT * FROM user WHERE u_email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user_mail = $result->fetch_assoc();
      
      if ($user_mail) {
        echo 'Email already exists';
        header("Location: " . $signup_path);
        echo 'good3'; // ok, this is for testing

      } else {
        // Check if the password is at least 4 characters long
        if (strlen($u_password) < 4) {
          echo 'Password must be at least 4 characters long';
          echo "good4"; // this is for testing
        } else {
          // Hash the password
          $u_password = password_hash($u_password, PASSWORD_DEFAULT);

          // Insert the new user into the database
          $stmt = $mysqli->prepare("INSERT INTO user (u_firstname, u_lastname, u_email, u_password, u_role, u_gender, u_phone) VALUES (?, ?, ?, ?, ?, ?, ?)");
          
          // upper name
          $u_firstname = strtoupper($u_firstname);
          $u_lastname = strtoupper($u_lastname);

          $stmt->bind_param("sssssss", $u_firstname, $u_lastname, $u_email, $u_password, $u_role, $u_gender, $u_phone);
          $stmt->execute();

          echo 'User created successfully';

          header("Location: index.php");

          exit();
        }
      }
      $mysqli->close(); // test root
  }

?>

