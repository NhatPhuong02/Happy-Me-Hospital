<? if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == false) ?>
    <nav class="navbar navbar-expand-lg bg-white">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="../img/Logo.png" alt="Logo Happp Me Hospital" width="185" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto ">
                    <hr>
                    <li class="nav-item text-center">
                        <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                    </li>
                    <hr>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle text-sm-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Services
                        </a>
                        <ul class="dropdown-menu text-center text-xl-start ">
                            <li><a class="dropdown-item " href="forum.html">Forum</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="booking.html">Booking</a></li>
                        </ul>
                    </li>
                    <hr>
                    <li class="nav-item d-flex justify-content-center">
                        <a class="nav-link" href="product.html">Product</a>
                    </li>
                    <hr>
                    <li class="nav-item d-flex justify-content-center">
                        <a class="nav-link" href="aboutUs.html">About Us</a>
                    </li>
                    <a class="btn btn-primary rounded-pill border-0" href="signin.php" role="button" style="background-image: linear-gradient(to right, rgba(89, 186, 184, 1), rgba(19, 132, 131, 1));">Register</a>
                </ul>
            </div>
        </div>
    </nav>

    <? else (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) ?>
    <nav class="navbar navbar-expand-lg bg-white">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="../img/Logo.png" alt="Logo Happp Me Hospital" width="185" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto ">
                    <hr>
                    <li class="nav-item text-center">
                        <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                    </li>
                    <hr>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle text-sm-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Services
                        </a>
                        <ul class="dropdown-menu text-center text-xl-start ">
                            <li><a class="dropdown-item " href="forum.html">Forum</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="booking.html">Booking</a></li>
                        </ul>
                    </li>
                    <hr>
                    <li class="nav-item d-flex justify-content-center">
                        <a class="nav-link" href="product.html">Product</a>
                    </li>
                    <hr>
                    <li class="nav-item d-flex justify-content-center">
                        <a class="nav-link" href="aboutUs.html">About Us</a>
                    </li>
                </ul>
            </div>
            <div class="btn btn-primary rounded-pill border-0" style="background-image: linear-gradient(to right, rgba(89, 186, 184, 1), rgba(19, 132, 131, 1));">Hello <?($firstname + $lastname)?></div>
        </div>
    </nav>
