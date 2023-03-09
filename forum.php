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
    <title>Our Feedback</title>
</head>


<body>
    <?php include("header.php") ?>
    <div class="container">
        <div class="row">
            <div class="col-4 bg-main rounded-start-5">
            </div>
            <div class="col-4 text-center ">
                Top Categories
            </div>
            <div class="col-12">
                Slide
            </div>
        </div>
    </div>
    <?php include('footer.php') ?>
</body>

</html>