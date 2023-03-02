<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        session_start();
        include("head.php");
        if (!isset($_SESSION['firstName'])) {
            header("Location: signIn.php");
            exit(1);
        } 
    ?>
    <title>Booking</title>
</head>


<body>
<?php include("header.php")?>
<?php include('footer.php')?>
</body>

</html>