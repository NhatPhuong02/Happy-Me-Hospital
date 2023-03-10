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

    <?php include("header.php") ?>
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
                <div class="col-4 h-50 ">
                    <div class="row bg-main">
                        <div class="card w-75 mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                               
                            </div>
                        </div>
                        <div class="card w-75 mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                            </div>
                        </div>
                        <div class="card w-75 mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                              
                            </div>
                        </div>
                       
                    </div>
                    <div class="text-center fw-bold mt-3"> Top Categories</div>
                </div>
                <div class="col-8 ps-5">
                    <div class="p-3 alert alert-secondary " style="border: 3px solid #138483 ; color:black" role="alert">
                        <h5>Topic title</h5>
                        <div class="row mt-3">
                            <div class="col-1">
                                <img src="./img/avatar/User.png" class="img rounded-start" alt="">
                            </div>
                            <div class="col-6">
                                <h6 style="color:#138483">Random User</h6>
                                <sup style="color:darkgrey">Role User
                            </div>
                            <div class="col-4 text-end">
                                10 hours ago
                            </div>
                        </div>
                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi accumsan pulvinar libero, ac euismod urna pretium eu. Sed accumsan pretium augue consequat ornare. </div>
                        <a href="#">comment<i class="fa-sharp fa-solid fa-comment-middle"></i></a>
                    </div>
                    <div class="p-3 alert alert-secondary " style="border: 3px solid #138483 ; color:black" role="alert">
                        <h5>Topic title</h5>
                        <div class="row mt-3">
                            <div class="col-1">
                                <img src="./img/avatar/User.png" class="img rounded-start" alt="">
                            </div>
                            <div class="col-6">
                                <h6 style="color:#138483">Random User</h6>
                                <sup style="color:darkgrey">Role User
                            </div>
                            <div class="col-4 text-end">
                                10 hours ago
                            </div>
                        </div>
                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi accumsan pulvinar libero, ac euismod urna pretium eu. Sed accumsan pretium augue consequat ornare. </div>
                        <a href="#">comment<i class="fa-sharp fa-solid fa-comment-middle"></i></a>
                    </div>

                    <div class="p-3 alert alert-secondary " style="border: 3px solid #138483 ; color:black" role="alert">
                        <h5>Topic title</h5>
                        <div class="row mt-3">
                            <div class="col-1">
                                <img src="./img/avatar/User.png" class="img rounded-start" alt="">
                            </div>
                            <div class="col-6">
                                <h6 style="color:#138483">Random User</h6>
                                <sup style="color:darkgrey">Role User
                            </div>
                            <div class="col-4 text-end">
                                10 hours ago
                            </div>
                        </div>
                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi accumsan pulvinar libero, ac euismod urna pretium eu. Sed accumsan pretium augue consequat ornare. </div>
                        <a href="#">comment<i class="fa-sharp fa-solid fa-comment-middle"></i></a>
                    </div>
                </div>



            </div>
        </div>
        <?php include('footer.php') ?>
</body>

</html>