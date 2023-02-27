
<!--    NAV HEADER FOR CUSTOMER SIDE PAGE
        EXCEPT LOGIN AND REGISTRATION PAGE  -->
        
<nav class="navbar navbar-expand-lg bg-white">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            <img src="img/Logo.png" alt="Logo Happp Me Hospital" width="185" height="40">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto ">
                <hr>
                <li class="nav-item text-center">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <hr>
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle text-sm-center" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu text-center text-xl-start ">
                        <li><a class="dropdown-item " href="forum.php">Forum</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="booking.php">Booking</a></li>
                    </ul>
                </li>
                <hr>
                <li class="nav-item d-flex justify-content-center">
                    <a class="nav-link" href="product.php">Product</a>
                </li>
                <hr>
                <li class="nav-item d-flex justify-content-center">
                    <a class="nav-link" href="aboutUs.php">About Us</a>
                </li>
                <hr>
                <li class="nav-item d-flex justify-content-center">
                    <?php if ($_COOKIE['u_id'] != NULL) {?>
                        
                        <a class="btn btn-primary rounded-pill border-0" href="signUp.php" role="button" style="background-image: linear-gradient(to right, rgba(89, 186, 184, 1), rgba(19, 132, 131, 1));"><?php echo $_COOKIE['u_firstName'];?></a>
                        <?php }else {?>
                            <a class="btn btn-primary rounded-pill border-0" href="signUp.php" role="button" style="background-image: linear-gradient(to right, rgba(89, 186, 184, 1), rgba(19, 132, 131, 1));">Register</a>
                        <?php }?>
                </li>
            </ul>
            
        </div>
    </div>
</nav>