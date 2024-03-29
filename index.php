<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    session_start();
    include("head.php");
    include("conn_db.php")
    ?>
    <title>Welcome Happy Me</title>
</head>

<body>
    <?php include("header.php") ?>
    <div class="container">
        <div class="jumbotron ">
            <div class="row ">
                <div class="col col-sm-7 col-md-5 ">
                    <div class="h1 mt-4 ">We care about</div>
                    <div class="h1 " style="background: -webkit-linear-gradient(90.29deg, #59BAB8 0.21%, #138483 99.79%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; ">Your mental <br>health</div>
                    <div class="h6 " style="font-size: 11.23px;color:rgba(196, 196, 196, 1) ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi accumsan pulvinar libero, ac euismod urna pretium eu. Sed accumsan pretium augue consequat ornare.</div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start ">
                    <button class="btn btn-primary rounded-pill mt-5 me-md-2 border-0 " type="button " style="background-image: linear-gradient(to right, rgba(89, 186, 184, 1), rgba(19, 132, 131, 1)) ">Try Free Consultant</button>
                </div>
                <div class="col col-sm-1 me-sm-5 ms-md-1 mt-3">
                    <p class="col_Active_Docter-count fs-2 mb-0 ">100+</p>
                    <p class="col_Active_Docter-text " style="font-size:10px;color:rgba(196, 196, 196, 1) ">Active<br> Docter</p>
                </div>
                <div class="col col-sm-1 me-sm-5 ms-md-2 mt-3">
                    <p class="col_Active_Docter-count fs-2 mb-0 ">3k+</p>
                    <p class="col_Active_Docter-text " style="font-size:10px;color:rgba(196, 196, 196, 1) ">Happy<br>User</p>
                </div>
                <div class="col col-sm-1 me-sm-5 ms-md-2 mt-3">
                    <p class="col_Active_Docter-count fs-2 mb-0 ">200+</p>
                    <p class="col_Active_Docter-text " style="font-size:10px;color:rgba(196, 196, 196, 1) ">Type of medicine</p>
                </div>
            </div>
        </div>

        <hr class="w-50 mx-auto mt-5 mb-5">

        <div class="jumbotron mb-5">
            <div class="row">
                <div class="text-center fs-3 mb-5">Out <span style="background: -webkit-linear-gradient(90.29deg, #59BAB8 0.21%, #138483 99.79%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; ">Main Services </span><br> Categories</div>
                <div class="col column-sm-4 d-flex justify-content-center mb-5">
                    <div class="card " style="width: 18rem; border-radius:0 0 25px 25px">
                        <img src="img/booking.png" class="card-img-top " alt="... ">
                        <div class="card-body " style="background-image:linear-gradient(150deg, #59BAB8, #138483); border-radius:0 0 25px 25px">
                            <h5 class="card-title text-white">Book Appointment</h5>
                            <p class="card-text"style="color:#2d2828b3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi accumsan pulvinar libero, ac euismod urna pretium eu. Sed accumsan pretium augue consequat ornare. </p>
                        </div>
                    </div>
                </div>
                <div class="col column-sm-4 d-flex justify-content-center mb-5">
                    <div class="card " style="width: 18rem; border-radius:0 0 25px 25px">
                        <img src="img/health_store.png" class="card-img-top " alt="... ">
                        <div class="card-body " style="background-image:linear-gradient(210deg, #59BAB8, #138483); border-radius:0 0 25px 25px">
                            <h5 class="card-title text-white">Health Store</h5>
                            <p class=" card-text " style="color:#2d2828b3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi accumsan pulvinar libero, ac euismod urna pretium eu. Sed accumsan pretium augue consequat ornare. </p>
                        </div>
                    </div>
                </div>
                <div class="col column-sm-4 d-flex justify-content-center mb-5">
                    <div class="card " style="width: 18rem; border-radius:0 0 25px 25px">
                        <img src="img/community.png" class="card-img-top " alt="... ">
                        <div class="card-body " style="background-image:linear-gradient(150deg, #59BAB8, #138483); border-radius:0 0 25px 25px">
                            <h5 class="card-title text-white">Community</h5>
                            <p class="card-text " style="color:#2d2828b3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi accumsan pulvinar libero, ac euismod urna pretium eu. Sed accumsan pretium augue consequat ornare. </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5 ">
                <div class="col col-sm-8">
                    <div class="h2" style="background: -webkit-linear-gradient(90.29deg, #59BAB8 0.21%, #138483 99.79%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; ">Qualified Docter</div>
                    <div class="text" style="font-size: 9.23px;color:rgba(196, 196, 196, 1)">Handled directly by general doctors and professional and experienced specialists doctors.</div>
                    <div class="card mt-3 mb-3 pb-5" style="background: #138483; border-radius: 17.9436px 0px 17.9436px 17.9436px;">
                        <div class="h3 card-title p-4">
                            <div id="carouselExampleCaptions" class="carousel slide">
                                <text class="h3" fill="#fff">Out Doctor</text><br>

                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 3" class=""></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 3" class=""></button>
                                </div>
                                <text class="h3 text-white">Dr.</text>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false">
                                            <rect width="100%" height="100%" fill="#138483"></rect>
                                            <div class="pb-sm-5 text-white">Nguyễn Trần Nhật Phương</div>
                                        </div>
                                        <div class="carousel-caption d-none d-md-block">
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false">
                                            <rect width="100%" height="100%" fill="#138483"></rect>
                                            <div class="pb-sm-5 text-white">Bùi Quang Minh</div>
                                        </div>
                                        <div class="carousel-caption d-none d-md-block">
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false">
                                            <rect width="100%" height="100%" fill="#138483"></rect>
                                            <div class="pb-sm-5 text-white">Phạm Thái Linh</div>
                                        </div>
                                        <div class="carousel-caption d-none d-md-block">
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" aria-label="Placeholder: Fourth slide" preserveAspectRatio="xMidYMid slice" focusable="false">
                                            <rect width="100%" height="100%" fill="#138483"></rect>
                                            <div class="pb-sm-5 text-white">Trầm Thị Tuyết Thanh</div>
                                        </div>
                                        <div class="carousel-caption d-none d-md-block">
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" aria-label="Placeholder: Fifth slide" preserveAspectRatio="xMidYMid slice" focusable="false">
                                            <rect width="100%" height="100%" fill="#138483"></rect>
                                            <div class="pb-sm-5 text-white">Văn Công Gia Hưng</div>
                                        </div>
                                        <div class="carousel-caption d-none d-md-block">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="card-link p-2 ps-4 h4 text-white" style="text-decoration:none; ">Read more</a>
                    </div>

                </div>
                <div class="col col-sm-4 ">
                    <div class="row justify-content-end">
                        <div class=" col-12 card justify-content-center " style="width: 17rem; height:25rem;border: 10.2535px solid #FFF;
                    border-radius: 117.915px 117.915px 5.12675px 5.12675px;background: linear-gradient(180deg, #BFFCFA 0%, #138483 100%); filter: drop-shadow(0px 5.12675px 41.014px rgba(0, 145, 193, 0.5)); ;"><img class="card-img img-fluid col-12 justify-content-center text-center" src="img/image 8.png" alt=""></div>

                    </div>
                </div>

                <div class="carousel mt-5">
                    <!-- prev -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" style="left:25%">
                        <span class="carousel-control-prev-icon" style="background-color: #138483" aria-hidden="true"></span>
                    </button>
                    <!-- next -->
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" style="right:25%">
                        <span class="carousel-control-next-icon " style="background-color: #138483" aria-hidden="true"></span>
                    </button>
                </div>
                <div class="jumbotron justify-content-center d-flex align-items-center mb-5 mt-5">
                    <div class="card text-center align-middle border-0" style="background: #F6F6F6; border-radius: 46px;;">
                        <div class="card-header-tabs m-3" style="font-size:24.6px">Let started with us</div>
                        <div class="d-grid gap-2 col-10 mx-auto">
                            <div class="card-text p-3 ms-5 me-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sodales morbi tristique libero urna sem vitae. Viverra facilisis rhoncus et, nibh nullam vitae laoreet.</div>
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button class="card-link btn btn-primary m-3" style=" --bs-btn-font-size: 1rem;">Lets Get Started</button>
                        </div>
                    </div>
                </div>
                <!-- footer -->
                <?php include('footer.php') ?>
            </div>
        </div>
    </div>
</body>

</html>