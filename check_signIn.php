<?php
  include ('conn_db.php');

  $signin_path = __DIR__ . 'signIn.php';

  // Check if the user is already logged in
  if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
    header("Location: index.php");
    exit();
  }

  // my condition
  if (isset($_POST['u_email']) && isset($_POST['u_password'])) {
    $u_email = $_POST['u_email'];
    $u_password = $_POST['u_password'];

    // avoid sql injection: https://www.w3schools.com/php/php_mysql_prepared_statements.asp
    $query = $mysqli->prepare("SELECT u_id, u_firstname, u_lastname, u_email, u_password FROM users WHERE u_email = ?");
    $query->bind_param("s", $u_email);
    $query->execute();
    $result = $query->get_result();

    if ($result->num_rows > 0) {
      $row = $result->fetch_array();


      if (password_verify($u_password, $row['u_password'])) {
        echo "Login successful!";
        // Set the session variable to indicate that the user is logged in
        $_SESSION['logged_in'] = true;
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
