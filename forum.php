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
    <title>Our Feedback</title>
</head>


<body>
    <?php if($_SESSION['role']== "admin"){include("admin/admin_header.php");}else{include("header.php");}  ?>
    <div class="container mt-5">
        <div class="navbar bg-body-tertiary">
            <div class="h6">
                <a href="index.php">Home Page</a>
                <span>></span>
                <a href="">Forum</a>
            </div>
            <form class="d-flex" role="search">
                <div class="input-group">
                    <span class="input-group-text"><a href="#"><i class="fa-solid fa-magnifying-glass"></i></a></span>
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </div>
            </form>
        </div>
        <div class="container">
            <div class="row mt-5">
                <div class="col-4 rounded-1">
                    <div class="text-center fw-bold mt-3"> Top Categories</div>
                </div>
                <div class="col-8 ps-5">
                    <div class="p-3 alert alert-secondary " style="border: 3px solid #138483 ; color:black" role="alert">
                        <p class="fw-bolder fs-5">Topic title</p>
                        <div class="row mt-3">
                            <div class="col-1">
                                <img src="./img/avatar/User.png" class="img rounded-start" alt="">
                            </div>
                            <div class="col-6">
                                <a href="#">
                                    <h6 class="fw-semibold" style="color:#138483">Random User</h6>
                                </a>
                                <sup style="color:darkgrey">Role User
                            </div>
                            <div class="col-5 text-end" style="color:darkgrey">
                                10 Followers
                            </div>
                        </div>
                        <div class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi accumsan pulvinar libero, ac euismod urna pretium eu. Sed accumsan pretium augue consequat ornare. </div>
                        <ul class="list-inline d-flex  mt-3">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fa fa-thumbs-up "></i>
                                    178
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fa fa-thumbs-down "></i>
                                    34
                                </a>
                            </li>
                            <li class="list-inline-item ms-auto">
                                <a href="#">
                                    <i class="fa fa-reply "></i>
                                    Reply
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="p-3 alert alert-secondary mt-4 " style="border: 3px solid #138483 ; color:black" role="alert">
                        <p class="fw-bolder fs-5">Topic title</p>
                        <div class="row mt-3">
                            <div class="col-1">
                                <img src="./img/avatar/User.png" class="img rounded-start" alt="">
                            </div>
                            <div class="col-6">
                                <a href="#">
                                    <h6 class="fw-semibold" style="color:#138483">Random User</h6>
                                </a>
                                <sup style="color:darkgrey">Role User
                            </div>
                            <div class="col-5 text-end" style="color:darkgrey">
                                10 Followers
                            </div>
                        </div>
                        <div class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi accumsan pulvinar libero, ac euismod urna pretium eu. Sed accumsan pretium augue consequat ornare. </div>
                        <ul class="list-inline d-flex mt-3">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fa fa-thumbs-up "></i>
                                    178
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fa fa-thumbs-down "></i>
                                    34
                                </a>
                            </li>
                            <li class="list-inline-item ms-auto">
                                <a href="#">
                                    <i class="fa fa-reply "></i>
                                    Reply
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="p-3 alert alert-secondary mt-4" style="border: 3px solid #138483 ; color:black" role="alert">
                        <p class="fw-bolder fs-5">Topic title</p>
                        <div class="row mt-3">
                            <div class="col-1">
                                <img src="./img/avatar/User.png" class="img rounded-start" alt="">
                            </div>
                            <div class="col-6">
                                <a href="#">
                                    <h6 class="fw-semibold" style="color:#138483">Random User</h6>
                                </a>
                                <sup style="color:darkgrey">Role User
                            </div>
                            <div class="col-5 text-end" style="color:darkgrey">
                                10 Followers
                            </div>
                        </div>
                        <div class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi accumsan pulvinar libero, ac euismod urna pretium eu. Sed accumsan pretium augue consequat ornare. </div>
                        <ul class="list-inline d-flex mt-3">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fa fa-thumbs-up "></i>
                                    178
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fa fa-thumbs-down "></i>
                                    34
                                </a>
                            </li>
                            <li class="list-inline-item ms-auto">
                                <a href="#">
                                    <i class="fa fa-reply "></i>
                                    Reply
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php include('footer.php') ?>
</body>

</html>