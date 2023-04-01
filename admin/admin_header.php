<!--    NAV HEADER FOR CUSTOMER SIDE PAGE
        EXCEPT LOGIN AND REGISTRATION PAGE  -->

<nav class="navbar navbar-expand-lg bg-white sticky-top border-bottom border-3 shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="../img/Logo.png" alt="Logo Happp Me Hospital" width="185" height="40">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto ">
                <hr>
                <li class="nav-item text-center mx-4">
                    <a class="nav-link active" aria-current="page" href="admin_index.php">Home</a>
                </li>
                <hr>
                <li class="nav-item text-center mx-4">
                    <a class="nav-link" aria-current="page" href="admin_list_user.php">User</a>
                </li>
                <hr>
                <li class="nav-item text-center mx-4">
                    <a class="nav-link" href="admin_list_medicine.php">Product</a>
                </li>
                <hr>
                <div class="vr"></div>
                <hr class="me-5">
                <li class="nav-item dropdown ms-lg-1 text-center">
                    <?php if (isset($_SESSION['firstName'])) { ?>
                        <a class="nav-link dropdown-toggle text-sm-center" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Welcome
                            <?= $_SESSION['firstName'] ?>
                        </a>
                        <ul class="dropdown-menu text-center text-xl-start border-2">
                            <li><a class="dropdown-item " href="../user_profile.php">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="../logout.php">Logout</a></li>
                        </ul>
                    <?php } ?>
                </li>
            </ul>
        </div>
    </div>
</nav>