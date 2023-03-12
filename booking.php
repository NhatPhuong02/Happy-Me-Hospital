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
    include("conn_db.php");

    ?>
    <title>Booking</title>
</head>

<body>
    <?php include("header.php") ?>
    <div class="container mt-5">
        <div class="navbar bg-body-tertiary">
            <div class="h6">
                <a href="index.php">Home Page</a>
                <span>></span>
                <a href="#">Booking</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-6">
                <div class="h4">Booking an Appointment</div>
                <div class="h5 mt-4" style="color: #138483;"> 12/03/2023 </div>
                <div class="grid gap-3 ms-3 mt-5">
                    <button type="button" class="btn btn-lg btn-primary p-2 g-col-6 me-3">Primary</button>
                    <button type="button" class="btn btn-lg btn-primary p-2 g-col-6">Primary</button>
                    <br>
                    <button type="button" class="btn btn-lg btn-primary p-2 g-col-6 mt-3 me-3">Primary</button>
                    <button type="button" class="btn btn-lg btn-primary p-2 g-col-6 mt-3 ">Primary</button>
                </div>
            </div>
            <div class="col-6 ">
                <div class="card bg-main justify-content-center w-50">
                    <div class="card-body text-center ">
                        Dr. Bui Quang Minh
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class=" col-12 card justify-content-center " style="width: 17rem; height:25rem;border: 10.2535px solid #FFF;
                    border-radius: 117.915px 117.915px 5.12675px 5.12675px;background: linear-gradient(180deg, #BFFCFA 0%, #138483 100%); filter: drop-shadow(0px 5.12675px 41.014px rgba(0, 145, 193, 0.5)); ;">
                        <img class="card-img img-fluid col-12 justify-content-center text-center" src="img/image 8.png" alt="">
                    </div>
                </div>
            </div>

        </div>
    </div>


    <?php include('footer.php') ?>
</body>

</html>