<?php
  include ('conn_db.php');

  $signin_path = __DIR__ . '/../signIn.html';

  // Check if the user is already logged in
  if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
    header("Location: welcome_page.html");
    exit();
  }

  // my condition
  if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // avoid sql injection: https://www.w3schools.com/php/php_mysql_prepared_statements.asp
    $query = $mysqli->prepare("SELECT firstname, lastname, email, password FROM hy_Users WHERE email = ?");
    $query->bind_param("s", $email);
    $query->execute();
    $result = $query->get_result();

    if ($result->num_rows == 1) {
      $row = $result->fetch_assoc();
      if (password_verify($password, $row['password'])) {
        echo "Login successful!";
        // Set the session variable to indicate that the user is logged in
        $_SESSION['logged_in'] = true;
        header("Location: ../index.html");
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
