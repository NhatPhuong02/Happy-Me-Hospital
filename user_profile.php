<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    session_start();
    include('head.php');
    include("conn_db.php");
    if (!isset($_SESSION['firstName'])) {
        header("Location: signIn.php");
        exit(1);
    }

    ?>
    <title>Profile</title>
</head>

<body class="bg-light">
    <?php include('header.php'); ?>
    <div class="container mt-5 ">

        <div class="row">
            <div class="col-3">
                <div class="card-title h3 mb-2" type="link">My Account</div>
            </div>
            <div class="col-9">
                <div class="row">
                    <?php
                    if (isset($_GET["up_pwd"])) {
                        if ($_GET["up_pwd"] == 1) {
                    ?>
                            <!-- START SUCCESSFULLY UPDATE PASSWORD -->
                            <div class="row row-cols-1 notibar">
                                <div class="col mt-2 ms-2 p-2 bg-success text-white rounded text-start w-50">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle ms-2" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                    </svg>
                                    <span class="ms-2 mt-2">Successfully updated your password! </span>
                                    <span class="me-2 float-end"><a class="text-decoration-none link-light" href="user_profile.php">X</a></span>
                                </div>
                            </div>
                            <!-- END SUCCESSFULLY UPDATE PASSWORD -->
                        <?php } else { ?>
                            <!-- START FAILED UPDATE PASSWORD -->
                            <div class="row row-cols-1 notibar">
                                <div class="col mt-2 ms-2 p-2 bg-danger text-white rounded text-start w-50">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle ms-2" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                    </svg><span class="ms-2 mt-2">Failed to update your password.</span>
                                    <span class="me-2 float-end"><a class="text-decoration-none link-light" href="user_profile.php">X</a></span>
                                </div>
                            </div>
                            <!-- END FAILED UPDATE PASSWORD -->
                        <?php }
                    }
                    if (isset($_GET["up_prf"])) {
                        if ($_GET["up_prf"] == 1) {
                        ?>
                            <!-- START SUCCESSFULLY UPDATE PASSWORD -->
                            <div class="row row-cols-1 notibar">
                                <div class="col mt-2 ms-2 p-2 bg-success text-white rounded text-start w-50">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle ms-2" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                    </svg>
                                    <span class="ms-2 mt-2">Successfully updated your profile!

                                        <span class="me-2 float-end"><a class="text-decoration-none link-light" href="user_profile.php">X</a></span>
                                </div>
                            </div>
                            <!-- END SUCCESSFULLY UPDATE PASSWORD -->
                        <?php } else { ?>
                            <!-- START FAILED UPDATE PASSWORD -->
                            <div class="row row-cols-1 notibar">
                                <div class="col mt-2 ms-2 p-2 bg-danger text-white rounded text-start w-50">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle ms-2" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                    </svg><span class="ms-2 mt-2">Failed to update your profile.</span>
                                    <span class="me-2 float-end"><a class="text-decoration-none link-light" href="user_profile.php">X</a></span>
                                </div>
                            </div>
                            <!-- END FAILED UPDATE PASSWORD -->
                    <?php }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3 text-center px-4 pb-4">
                <div class="btn logo text-center" data-bs-toggle="modal" data-bs-target="#static-img">
                    <div class="row bg-main p-3 rounded-4"><img <?php
                                                                    if (!isset($_SESSION['avatar'])) {
                                                                        if ($_SESSION["gender"] == "Male") {
                                                                            echo "src='img/avatar/default_man.png'";
                                                                        }
                                                                        if ($_SESSION["gender"] == "Female") {
                                                                            echo "src='img/avatar/default_women.png'";
                                                                        }
                                                                        if ($_SESSION["gender"] == "Other") {
                                                                            echo "src='img/avatar/default_other.png'";
                                                                        }
                                                                    } else {
                                                                        echo "src=\"img/avatar/{$_SESSION['avatar']}\"";
                                                                    } ?>class="img-thumbnail rounded-circle bg-white" alt="logo"></div>
                </div>
                <!-- Modal_img -->
                <div class="modal" id="static-img" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Choose Your Picture</h1>
                            </div>
                            <form action="upload.php" method="post" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <input type="file" name="fileToUpload" id="fileToUpload">
                                </div>
                                <div class="modal-footer">
                                    <input class="btn btn-primary" type="submit" value="Upload Image" name="submit">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="btn btn-lg bg-main-hover text-white mt-4 mb-4 w-100" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Edit</div>
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
                                <a href="user_update_info.php" type="button" class="btn btn-primary">Change
                                    Information</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-9 ">
                <div class="card bg-main fs-5 text-white w-auto rounded-4">
                    <div class="row ps-0 ms-2 my-2">
                        <div class="col-3 title">UserName:</div>
                        <div class="col-9 data">
                            <?= $_SESSION['firstName'] . " " . $_SESSION['lastName'] ?>
                        </div>
                    </div>
                    <div class="row ps-0 ms-2 my-2">
                        <div class="col-3 title">Phone:</div>
                        <div class="col-9 data">
                            <?php if (isset($_SESSION['phone'])) {
                                echo substr($_SESSION['phone'], 0, 4) . "." . substr($_SESSION['phone'], 4, 3) . "." . substr($_SESSION['phone'], 7, 3);
                            } ?>
                        </div>
                    </div>
                    <div class="row ps-0 ms-2 my-2">
                        <div class="col-3 title">Email:</div>
                        <div class="col-9 data">
                            <?= $_SESSION['email'] ?>
                        </div>
                    </div>
                    <div class="row ps-0 ms-2 my-2">
                        <div class="col-3 title">Gender:</div>
                        <div class="col-9 data">
                            <?php if (isset($_SESSION['gender'])) {
                                echo $_SESSION['gender'];
                            } ?>
                        </div>
                    </div>
                    <div class="row ps-0 ms-2 my-3">
                        <div class="col-3 title">Address:</div>
                        <div class="col-9 data ">
                            <?php if (isset($_SESSION['address'])) {
                                echo $_SESSION['address'];
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row mb-3">
                    <div class="col-12 fs-5">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01/01/2022</td>
                                    <td>10 items</td>
                                    <td>$100.00</td>
                                    <td>Complete</td>
                                    <td><button type="button" class="btn btn-lg bg-main-2-hover" style="color: white">View</button></td>
                                </tr>
                                <tr>
                                    <td>02/01/2022</td>
                                    <td>5 items</td>
                                    <td>$50.00</td>
                                    <td>Pending</td>
                                    <td><button type="button" class="btn btn-lg bg-main-2-hover" style="color: white">View</button></td>
                                </tr>
                                <tr>
                                    <td>03/01/2022</td>
                                    <td>3 items</td>
                                    <td>$30.00</td>
                                    <td>Cancelled</td>
                                    <td><button type="button" class="btn btn-lg bg-main-2-hover" style="color: white">View</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button class="btn btn-lg bg-main-2-hover d-grid col-2 mx-auto mt-4" title="View more order history" style="color:white">Show More</button>
                    </div>
                </div>
            </div>
            <?php include("footer.php") ?>
</body>

</html>