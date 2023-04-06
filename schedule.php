<?php

session_start();
include ('conn_db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $date = $_POST['date'];
    $time = $_POST['time'];

    // convert to varchar
    $date = date('Y/m/d', strtotime($date));
    $time = date('H:i', strtotime($time));

    // get id of the user:
    $User_u_id = $_SESSION['id'];

    // check if schedule is assigned before
    $check_schedule = $mysqli->prepare("SELECT * FROM Schedule WHERE s_date = ? AND s_time = ?");
    $check_schedule->bind_param("ss", $date, $time);
    $check_schedule->execute();
    $result = $check_schedule->get_result();

    if ($result->num_rows > 0) {
        header("location: booking.php?up_prf=0");
    } else {
        // update to db
        $stmt = $mysqli->prepare("INSERT INTO Schedule (User_u_id, s_date, s_time) VALUES (?, ?, ?)");
        $stmt->bind_param("iss", $User_u_id, $date, $time);
        $stmt->execute();

        header("location: booking.php?up_prf=1");

    }

} else {
    // header("Location: s_index.html");
    // or show message...
    exit();
}

?>
