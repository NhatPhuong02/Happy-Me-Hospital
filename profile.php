<!DOCTYPE html>
<html lang="en">

<head>
<?php 
    session_start();
    include('head.php');
?>
    <title>Profile</title>
</head>

<body class="bg-light">
    <?php include('header.php');?>
    <div class="container mt-5 ">
        <div class="row">
            <div class="col-3 text-center px-4 pb-4">
                <div class="logo text-center">
                    <div class="row bg-main-2 p-3 rounded-2"><img src="img/avatar/man (1).png" class="img-thumbnail rounded-circle bg-white" alt="logo"></div>
                </div>
                <div class="btn bg-main-2-hover text-white mt-2 mb-4">Edit Information</div>
            </div>
            <div class="col-9 ">
                <div class="card-title h3 mb-2" type="link">My Account</div>
                <div class="card bg-main fs-5 text-white">
                    <div class="row ps-0 ms-1 my-2">
                        <div class="col-6 title">UserName:</div>
                        <div class="col-6 data"> <?= $_SESSION['firstName'] . " " . $_SESSION['lastName']?> </div>
                    </div>
                    <div class="row ps-0 ms-1 my-2">
                        <div class="col-6 title">Phone:</div>
                        <div class="col-6 data"><?php if(isset($_SESSION['phone']))
                        { echo substr($_SESSION['phone'],0,4) . "." . substr($_SESSION['phone'],4,3) . "." . substr($_SESSION['phone'],7,3);} ?></div>
                    </div>
                    <div class="row ps-0 ms-1 my-2">
                        <div class="col-6 title">Email:</div>
                        <div class="col-6 data"><?= $_SESSION['email']?></div>
                    </div>
                    <div class="row ps-0 ms-1 my-2">
                        <div class="col-6 title">Gender:</div>
                        <div class="col-6 data"><?php if(isset($_SESSION['gender'])){echo $_SESSION['gender'];}?></div>
                    </div>
                    <div class="row ps-0 ms-1 my-2">
                        <div class="col-6 title">Address:</div>
                        <div class="col-6 data"><?php if(isset($_SESSION['gender'])){echo $_SESSION['gender'];}?></div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card link bg-main-2 fs-5">
                    <ul class="navbar-nav text-white">
                        <li class="nav-item text-center mb-3 mt-3">
                            <a src="">My Cart</a>
                        </li>
                        <li class="nav-item text-center mb-3">
                            <a src="">My booking</a>
                        </li>
                        <li class="nav-item text-center mb-3">
                            <a src="">HomePage</a>
                        </li>
                        <li class="nav-item text-center mb-3">
                            <a src="">Forum</a>
                        </li>
                        <li class="nav-item text-center mb-3">
                            <a src="">Make Appointment</a>
                        </li>
                        <li class="nav-item text-center mb-3">
                            <a src="">Product</a>
                        </li>
                        <li class="nav-item text-center mb-3">
                            <a src="">Service</a>
                        </li>
                        <li class="nav-item text-center mb-3">
                            <a src="">About</a>
                        </li>
                        <li class="nav-item text-center mb-3">
                            <a src="">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-9">
                <div class="card-title h3 mb-3">My Purchases</div>
            </div>
        </div>
    </div>
</body>

</html>