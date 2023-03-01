<!DOCTYPE html>
<html lang="en">

<head>
    <?php
            session_start();

        include("head.php")
    ?>
    <title>Sign Up</title>
</head>

<body>
<?php include("header.php")?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-7 bg-main rounded-start-5 ">
                <div class="row pt-2 ps-3">
                    <div class="text-dark">Start For Free</div>
                </div>
                <div class="row p-1 ps-3">
                    <div class="text-white h3">Create an account</div>
                </div>

                <!-- PHP form -------------------------------------------------->
                <form id="signup-form" action="check_signUp.php" method="POST">
                    <div class="row p-3 ">
                        <div class="col-4 input-group-lg"><input type="text" class="form-control" placeholder="First name" aria-label="First name" id="firstname" name="u_firstname" required></div>
                        <div class="col-8 input-group-lg"><input type="text" class="form-control" placeholder="Last name" aria-label="Last name" id="lastname" name="u_lastname" required></div>
                    </div>
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
                            <button class="btn btn-dark btn-lg" type="submit" form="signup-form" name="submit">Create Account
                    </button>
                        </div>
                    </div>
                </form>
                <!-- end the PHP form -->

                <div class="row justify-content-center p-1">
                    <div class="text-sm-dark text-center"> Already A Menber?
                        <a href="signIn.php" class="text-white" style="text-decoration: none;">Login</a>
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
    <?php include('footer.php')?>
  
</body>

</html>