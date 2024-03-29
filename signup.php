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
    
    <script>
        function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            var expires = "expires="+d.toUTCString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }

        function getCookie(cname) {
            var name = cname + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) === ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) === 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }

        function checkBackNavigation() {
            var lastVisit = getCookie("lastVisit");
            if (lastVisit !== "") {
                var currentTime = new Date().getTime();
                var elapsedTime = currentTime - lastVisit;

                if (elapsedTime < 30000) { // 30 seconds
                    window.location.replace("index.php");
                }
            }
        }

        function updateLastVisit() {
            var currentTime = new Date().getTime();
            setCookie("lastVisit", currentTime, 1);
        }

        window.addEventListener('load', checkBackNavigation);
        window.addEventListener('beforeunload', updateLastVisit);
    </script>
    <?php include("header.php") ?>
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
                    <div class="row p-1 ">
                        <div class="col-4 input-group-lg"><input type="text" class="form-control" placeholder="First name" aria-label="First name" id="firstname" name="u_firstname"></div>
                        <div class="col-4 input-group-lg"><input type="text" class="form-control" placeholder="Last name" aria-label="Last name" id="lastname" name="u_lastname"></div>
                        <div class="col-4 input-group-lg"><input type="text" class="form-control" placeholder="Phone number" aria-label="Phone number" id="phonenumber" name="u_phone"></div>
                    </div>
                    <div class="row p-1">
                        <div class="col-12 input-group-lg">
                            <input type="text" class="form-control" placeholder="Email" aria-label="Email" id="email" name="u_email" required>
                        </div>
                    </div>
                    <div class="row p-1 ">
                        <div class="input-group mb-3 input-group-lg ">
                            <input type="password" placeholder="Password" class="form-control" aria-label="Text input with checkbox" id="password" name="u_password" required>
                            <div class="input-group-text" style="background-color:#59BAB8">
                                <i class="fa-solid fa-eye" id="eyes_password" onclick="myFunction()"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row p-1 text-white">
                        <div class="col h5">Your gender</div>
                        <div class="col form-check">
                            <input class="form-check-input" type="radio" value="Male" name="u_gender">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Male
                            </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="radio" value="Female" name="u_gender">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Female
                            </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="radio" value="Other" name="u_gender">
                            <label class="form-check-label" for="flexRadioDefault3">
                                Other
                            </label>
                        </div>
                    </div>
                    <div class="row justify-content-center p-1">
                        <div class="col col-6 text-center">
                            <button class="btn btn-dark btn-md" type="submit" form="signup-form" name="submit">Create Account
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
                <div class="text-center align-middle">
                    <img src="img/image-from-rawpixel-id-2317451-original.png" class="img-fluid" alt="...">
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include('footer.php') ?>

</body>

</html>