<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    session_start();

    include('head.php');
    ?>
    <title>Sign In</title>

</head>

<body>
    <?php include("header.php") ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-7 bg-main rounded-start-5 ">
                <div class="row pt-2 ps-3">
                    <div class="text-dark">Start For Free</div>
                </div>
                <div class="row p-1 ps-3">
                    <div class="text-white h3">Join With Us</div>
                </div>
                <!-- PHP form -------------------------------------------------->
                <form id="signin-form" action="check_signIn.php" method="POST">
                    <div class="row p-3">
                        <div class="col-12 input-group-lg">
                            <input type="text" class="form-control" placeholder="Email" aria-label="Email" id="email" name="u_email" required>
                        </div>
                    </div>
                    <div class="row p-3 ">
                        <div class="input-group mb-3 input-group-lg ">
                            <input type="password" placeholder="Password" class="form-control" aria-label="Text input with checkbox" id="password" name="u_password" required>
                            <div class="input-group-text" style="background-color:#59BAB8">
                                <i class="fa-solid fa-eye" id="eyes_password" onclick="myFunction()"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center p-1">
                        <div class="col col-6 text-center">
                            <button class="btn btn-dark btn-lg" type="signin-form" id="logged_in" name="logged_in"> Sign In
                            </button>
                        </div>
                    </div>
                    <!-- END PHP form -------------------------------------------------->
                    <div class="row justify-content-center p-1">
                        <div class="text-sm-dark text-center"> Don't have a account?
                            <a href="signUp.php" class="text-white" style="text-decoration: none;">Sign Up</a>
                        </div>
                    </div>
            </div>
            <div class="col-sm-5 p-0 bg-main-2">
                <div class="text-end  align-self-sm-center">
                    <img src="img/image-from-rawpixel-id-2317451-original.png" class="img-fluid" alt="...">
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include('footer.php') ?>

</body>

</html>