<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    session_start();
    include("head.php");
    if (!isset($_SESSION['firstName'])) {
        header("Location: signIn.php");
        exit(1);
    }
    include("conn_db.php");

    ?>
    <title>Booking</title>
</head>

<body>
    <?php include("header.php") ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-4 navbar bg-body-tertiary">
                <div class="h6">
                    <a href="index.php">Home Page</a>
                    <span>></span>
                    <a href="#">Booking</a>
                </div>
            </div>
            <div class="col-8">
                <div class="row">
                    <?php
                    if (isset($_GET["up_prf"])) {
                        if ($_GET["up_prf"] == 1) {
                            ?>
                            <!-- START SUCCESSFULLY UPDATE PASSWORD -->
                            <div class="row row-cols-1 notibar">
                                <div class="col mt-2 ms-2 p-2 bg-success text-white rounded text-start w-50">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-check-circle ms-2" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path
                                            d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                    </svg>
                                    <span class="ms-2 mt-2">Successfully! Meeting has been scheduled successfully!  </span>
                                    <span class="me-2 float-end"><a class="text-decoration-none link-light"
                                            href="user_profile.php">X</a></span>
                                </div>
                            </div>
                            <!-- END SUCCESSFULLY UPDATE PASSWORD -->
                        <?php } else { ?>
                            <!-- START FAILED UPDATE PASSWORD -->
                            <div class="row row-cols-1 notibar">
                                <div class="col mt-2 ms-2 p-2 bg-danger text-white rounded text-start w-50">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-x-circle ms-2" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path
                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                    </svg><span class="ms-2 mt-2">Failed! This schedule has already been assigned.</span>
                                    <span class="me-2 float-end"><a class="text-decoration-none link-light"
                                            href="user_profile.php">X</a></span>
                                </div>
                            </div>
                            <!-- END FAILED UPDATE PASSWORD -->
                        <?php }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-6 text-center">
<<<<<<< HEAD
                <p class="h4 fs-2 fw-semibold">Booking an Appointment</p>
                <form action="schedule.php" method="POST">
                    <label class="m-3" for="date">Choose a date:</label>
                    <input type="date" id="date" name="date" required><br>
                    <label class="m-3" for="time">Choose a time:</label>
                    <select class="m-3" id="time" name="time" required>
                        <option value="8am">8am</option>
                        <option value="9pm">9pm</option>
                        <option value="10pm">10pm</option>
                        <option value="11pm">11pm</option>
                        <option value="1pm">1pm</option>
                        <option value="2pm">2pm</option>
                        <option value="3pm">3pm</option>
                    </select><br>
                    <button class="btn btn-success m-3" type="submit">Book</button>
                </form>
                <script>
                    document.addEventListener("DOMContentLoaded", function () {
                        const dateInput = document.getElementById("date");
                        const today = new Date();
                        const yyyy = today.getFullYear();
                        const mm = String(today.getMonth() + 1).padStart(2, '0');
                        const dd = String(today.getDate()).padStart(2, '0');
                        const minDate = `${yyyy}-${mm}-${dd}`;
                        dateInput.setAttribute("min", minDate);
=======
                <p class="h4 fw-semibold">Booking an Appointment</p>
                <p class="h5 mt-5 fw-semibold" style="color: #138483;"> 12/03/2023 </p>
                <div class="grid gap-3 ms-3 mt-4">
                    <button type="button" class="btn bg-main-2-hover p-2 g-col-6 me-3" style="width: 130px; color: white; ">9:30</button>
                    <button type="button" class="btn bg-main-2-hover p-2 g-col-6" style="width: 130px; color: white;">9:30</button>
                    <br>
                    <button type="button" class="btn bg-main-2-hover p-2 g-col-6 mt-3 me-3" style="width: 130px; color: white; ">9:30</button>
                    <button type="button" class="btn bg-main-2-hover p-2 g-col-6 mt-3 " style="width: 130px; color: white;">9:30</button>
                </div>
                <div class="h5 mt-5 fw-semibold" style="color: #138483;"> 12/03/2023 </div>
                <div class="grid gap-3 ms-3 mt-4">
                    <button type="button" class="btn bg-main-2-hover p-2 g-col-6 me-3" style="width: 130px; color: white;">9:30</button>
                    <button type="button" class="btn bg-main-2-hover p-2 g-col-6" style="width: 130px; color: white;">9:30</button>
                    <br>
                    <button type="button" class="btn bg-main-2-hover p-2 g-col-6 mt-3 me-3" style="width: 130px; color: white;">9:30</button>
                    <button type="button" class="btn bg-main-2-hover p-2 g-col-6 mt-3 " style="width: 130px; color: white;">9:30</button>
                </div>
                <br>
                <div class="mt-5" style="margin-left: 20px"><button type="button" class="btn btn-outline-dark btn-lg">Book now</button></div>
>>>>>>> c08938cad6e32df18afd0c3fe4ff5d447a0b9efd


                        // Set the maximum date to 4 weeks from today
                        const maxDateObj = new Date(today.getTime() + 3 * 7 * 24 * 60 * 60 * 1000);
                        const yyyyMax = maxDateObj.getFullYear();
                        const mmMax = String(maxDateObj.getMonth() + 1).padStart(2, '0');
                        const ddMax = String(maxDateObj.getDate()).padStart(2, '0');
                        const maxDate = `${yyyyMax}-${mmMax}-${ddMax}`;
                        dateInput.setAttribute("max", maxDate);
                    });
                </script>
            </div>
            <div class="col-6 ">
                <div class="card bg-main w-50 " style="margin-left: 23.5%; border-radius: 20px 0px 20px 20px;">
                    <div class="card-body text-center" style="color: #FFF;">
                        Dr. Bui Quang Minh
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class=" col-12 card justify-content-center mt-3"
                        style="width: 17rem; height:25rem;border: 10.2535px solid #FFF;
                    border-radius: 117.915px 117.915px 5.12675px 5.12675px;background: linear-gradient(180deg, #BFFCFA 0%, #138483 100%); filter: drop-shadow(0px 5.12675px 41.014px rgba(0, 145, 193, 0.5)); ;">
                        <img class="card-img img-fluid col-12 justify-content-center text-center" src="img/image 8.png"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include('footer.php') ?>
</body>

</html>