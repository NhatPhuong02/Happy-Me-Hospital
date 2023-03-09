<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        session_start();
        include("head.php");
        include("conn_db.php");
    ?>

    <title>About Us</title>
</head>


<body>
<?php include("header.php")?>

<div class="container mt-5">
    <div class="row ">
        <div class="col-4 d-flex justify-content-center">
            <div class="card" style="width: 20rem;">
                <div class="card-body bg-main-2">
                <img src="img/avatar/hung.jpg" class="card-img-top rounded-top-4" alt="...">
                    <h5 class="card-title mt-3">Văn Công Gia Hưng</h5>
                    <p class="card-text m-0">Student ID: 20590**</p>
                    <p class="card_text">I am Web Designer</p>
                </div>
            </div>
        </div>
        <div class="col-4 d-flex justify-content-center">
            <div class="card" style="width: 20rem;">
                <div class="card-body bg-main-2">
                <img src="img/avatar/thanh.jpg" class="card-img-top rounded-top-4" alt="...">
                    <h5 class="card-title mt-3">Trầm Thị Tuyết Thanh</h5>
                    <p class="card-text m-0">Student ID: 20590**</p>
                    <p class="card_text">I am Data Engineer</p>
                </div>
            </div>
        </div>
        <div class="col-4 d-flex justify-content-center">
            <div class="card" style="width: 20rem;">
                <div class="card-body bg-main-2">
                    <img src="img/avatar/linh.jpg" class="card-img-top rounded-top-4" alt="...">
                    <h5 class="card-title mt-3">Phạm Thái Linh</h5>
                    <p class="card-text m-0">Student ID: 20590**</p>
                    <p class="card_text">I am Fullstack Developer</p>
                </div>
            </div>
        </div>
        <div class="col-6 d-flex justify-content-center mt-4">
            <div class="card" style="width: 20rem;">
                <div class="card-body bg-main-2">
                <img src="img/avatar/linh.jpg" class="card-img-top rounded-top-4" alt="...">
                    <h5 class="card-title mt-3">Nguyễn Trần Nhật Phương</h5>
                    <p class="card-text m-0">Student ID: 20590**</p>
                    <p class="card_text">I am Fullstack Developer</p>
                </div>
            </div>
        </div>
        <div class="col-6 d-flex justify-content-center mt-4">
            <div class="card" style="width: 20rem;">
                <div class="card-body bg-main-2">
                <img src="img/avatar/minh.jpg" class="card-img-top rounded-top-4" alt="...">
                    <h5 class="card-title mt-3">Bùi Quang Minh</h5>
                    <p class="card-text m-0">Student ID: 20590**</p>
                    <p class="card_text">I am Frontend Developer</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php')?>
</body>

</html>