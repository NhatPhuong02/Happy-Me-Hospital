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
                    <div class="row bg-main-2 p-3 rounded-2"><img <?php if(!isset($_SESSION['avatar'])){echo  "src='img/avatar/default.png'";} else {echo "src=\"img/avatar/{$_SESSION['avatar']}\"";}?> class="img-thumbnail rounded-circle bg-white" alt="logo"></div>
                </div>
                <div class="btn btn-lg bg-main-2-hover text-white mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Edit</div>
                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Your Account</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Choose:
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <a href="user_update_pwd.php" type="button" class="btn btn-primary">Change Password</a>
                        <a href="cust_change_infor.php" type="button" class="btn btn-primary">Change Information</a>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-9 ">
                <div class="card-title h3 mb-2" type="link">My Account</div>
                <div class="card bg-main fs-5 text-white">
                    <div class="row ps-0 ms-1 my-2">
                        <div class="col-3 title">UserName:</div>
                        <div class="col-9 data"> <?= $_SESSION['firstName'] . " " . $_SESSION['lastName']?> </div>
                    </div>
                    <div class="row ps-0 ms-1 my-2">
                        <div class="col-3 title">Phone:</div>
                        <div class="col-9 data"><?php if (isset($_SESSION['phone'])) {echo substr($_SESSION['phone'],0,4) . "." . substr($_SESSION['phone'],4,3) . "." . substr($_SESSION['phone'],7,3);} ?></div>
                    </div>
                    <div class="row ps-0 ms-1 my-2">
                        <div class="col-3 title">Email:</div>
                        <div class="col-9 data"><?= $_SESSION['email']?></div>
                    </div>
                    <div class="row ps-0 ms-1 my-2">
                        <div class="col-3 title">Gender:</div>
                        <div class="col-9 data"><?php if (isset($_SESSION['gender'])) {echo $_SESSION['gender'];}?></div>
                    </div>
                    <div class="row ps-0 ms-1 my-2">
                        <div class="col-3 title">Address:</div>
                        <div class="col-9 data "><?php if (isset($_SESSION['address'])) {echo $_SESSION['address'];}?></div>
                    </div>
                </div>
            </div>
            
            <div class="col-12">
                <div class="card-title h3 mb-3">My Purchases</div>
            </div>
        </div>
    </div>

    <?php include("footer.php")?>
</body>

</html>