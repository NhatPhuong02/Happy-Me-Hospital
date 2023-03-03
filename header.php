
<!--    NAV HEADER FOR CUSTOMER SIDE PAGE
        EXCEPT LOGIN AND REGISTRATION PAGE  -->
        
<nav class="navbar navbar-expand-lg bg-white sticky-top border-bottom border-3 shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="index.php">
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
                <li class="nav-item dropdown text-center">
                    <a class="nav-link dropdown-toggle text-sm-center" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu text-center text-xl-start border-2">
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
                <div class="vr"></div>
                <?php if(isset($_SESSION['firstName'])){?>
                <li class="nav-item d-flex ms-lg-5 justify-content-center ">
                    <a type="button" class="btn btn-light" href="cust_cart.php"><i class="fa-solid fa-cart-shopping "></i>
                        <!-- <span class="ms-1 badge bg-success">
                        </span> -->
                        <span class="ms-1 badge bg-secondary">0</span>
                    </a>
                </li> 
                <?php }?>
                <hr>
                <li class="nav-item dropdown ms-lg-1 text-center">
                    <?php include("session_timeout.php"); ?>
                    <?php if (!isset($_SESSION['firstName'])) {?>
                        <a class="btn btn-primary  rounded-pill border-0" href="signUp.php" role="button" style="background-image: linear-gradient(to right, rgba(89, 186, 184, 1), rgba(19, 132, 131, 1));">Register</a>
                    <?php }?>
                    <?php if (isset($_SESSION['firstName'])) {?>
                        <a class="nav-link dropdown-toggle text-sm-center" role="button" data-bs-toggle="dropdown" aria-expanded="false">Welcome <?= $_SESSION['firstName']?></a>
                        
                        <ul class="dropdown-menu text-center text-xl-start border-2">
                            <li><a class="dropdown-item " href="user_profile.php">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        </ul>
                    <?php }?> 
                </li>  
                             
            </ul>
        </div>
    </div>
</nav>