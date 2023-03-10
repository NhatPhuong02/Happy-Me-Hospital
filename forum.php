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
                    <span class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></span>
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </div>
            </form>
        </div>
        <div class="container">
            <div class="row mt-5">
                <div class="col-4 h-50">
                    <div class="row bg-main">
                        <div class=" p-3"> Lastest
                            <br> Fint the Lastest Update
                        </div>
                        <div class=" p-3"> Lastest
                            <br> Fint the Lastest Update
                        </div>
                        <div class=" p-3"> Lastest
                            <br> Fint the Lastest Update
                        </div>
                    </div>
                    <div class="row text-center"> Top Categories</div>
                </div>
                <div class="col-8 ps-5">
                    <div class="p-3 alert alert-secondary " style="border: 3px solid #138483 ; color:black" role="alert"> Topic title
                        <div></div>
                        <div>highlight_file</div>
                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi accumsan pulvinar libero, ac euismod urna pretium eu. Sed accumsan pretium augue consequat ornare. </div>
                        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Toggle bottom offcanvas</button>
                     
                    </div>
                    <div class="p-3 alert alert-secondary " style="border: 3px solid #138483 ; color:black" role="alert"> Topic title
                        <br> Fint the Lastest Update
                    </div>

                    <div class="p-3 alert alert-secondary " style="border: 3px solid #138483 ; color:black" role="alert"> Topic title
                        <br> Fint the Lastest Update
                    </div>
                </div>



            </div>
        </div>
        <?php include('footer.php') ?>
</body>

</html>