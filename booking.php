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
                <a href="#" >Booking</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-6 text-center">
                <p class="h4 fw-semibold">Booking an Appointment</p>
                <p class="h5 mt-5 fw-semibold" style="color: #138483;"> 12/03/2023 </p>
                <div class="grid gap-3 ms-3 mt-4">
                    <button type="button" class="btn btn-outline-secondary p-2 g-col-6 me-3" style="width: 130px; color: black; ">9:30</button>
                    <button type="button" class="btn btn-outline-secondary p-2 g-col-6" style="width: 130px; color: black;">9:30</button>
                    <br>
                    <button type="button" class="btn btn-outline-secondary p-2 g-col-6 mt-3 me-3" style="width: 130px; color: black; ">9:30</button>
                    <button type="button" class="btn btn-outline-secondary p-2 g-col-6 mt-3 " style="width: 130px; color: black;">9:30</button>
                </div>
                <div class="h5 mt-5 fw-semibold" style="color: #138483;"> 12/03/2023 </div>
                <div class="grid gap-3 ms-3 mt-4">
                <button type="button" class="btn btn-outline-secondary p-2 g-col-6 me-3" style="width: 130px; color: black;">9:30</button>
                    <button type="button" class="btn btn-outline-secondary p-2 g-col-6" style="width: 130px; color: black;">9:30</button>
                    <br>
                    <button type="button" class="btn btn-outline-secondary p-2 g-col-6 mt-3 me-3" style="width: 130px; color: black;">9:30</button>
                    <button type="button" class="btn btn-outline-secondary p-2 g-col-6 mt-3 " style="width: 130px; color: black;">9:30</button>
                </div>
                <br>
                <div class="mt-5" style="margin-left: 20px"><button type="button" class="btn btn-outline-dark btn-lg"  >Book now</button></div>
                
            </div>
            <div class="col-6 ">
                <div class="card bg-main w-50 " style="margin-left: 23.5%; border-radius: 20px 0px 20px 20px;" >
                    <div class="card-body text-center" style="color: #FFF;">
                        Dr. Bui Quang Minh
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class=" col-12 card justify-content-center mt-3" style="width: 17rem; height:25rem;border: 10.2535px solid #FFF;
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