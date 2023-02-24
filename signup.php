<?php
  include ('conn_db.php');

  $signup_path = __DIR__ . '/../signUp.html';



  // Check if the form has been submitted
  if (isset($_POST['submit'])) {
    // Get the form data
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    echo 'good1'; // ok

    // Check if the email is valid
    // if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //   echo 'Invalid email format';
    // } else {
      // delete because it's hard for testing

      // note: check again

      // Check if the email already exists
    $stmt = $mysqli->prepare("SELECT * FROM users WHERE u_email = ?");
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
        if (strlen($password) < 4) {
          echo 'Password must be at least 4 characters long';
          echo "good4"; // this is for testing
        } else {
          // Hash the password
          $password = password_hash($password, PASSWORD_DEFAULT);

          // Insert the new user into the database
          $stmt = $mysqli->prepare("INSERT INTO users (u_firstname, u_lastname, u_email, u_password) VALUES (?, ?, ?, ?)");
          $stmt->bind_param("ssss", $firstname, $lastname, $email, $password);
          $stmt->execute();

          echo 'User created successfully';

          header("Location: ../index.html");

          exit();
        }
      }
      $mysqli->close();
  }

?>

