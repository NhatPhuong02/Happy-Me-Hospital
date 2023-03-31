<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    session_start();
    include("head.php");
    include("conn_db.php");
    if (!isset($_SESSION['firstName'])) {
        header("Location: signIn.php");
        exit(1);
    }
    ?>
    <title>Medicine Product</title>
</head>


<body>
    <?php include("header.php") ?>

    <div class="container mt-5">
        <div class="navbar bg-body-tertiary">
            <div class="h6">
                <a href="index.php">Home Page</a>
                <span>></span>
                <a href="">Product</a>
            </div>
            <form class="d-flex" role="search">
                <div class="input-group">
                    <span class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></span>
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </div>
            </form>
        </div>
        <div class="row mt-5 justify-content-start">
            <?php
            $query = "SELECT * FROM Medicine";
            $result = $mysqli->query($query);

            if ($result->num_rows > 0) {
                while ($m_row = $result->fetch_array()) {

                    ?>

                    <div class="col col-lg-3 col-xl-3 col-md-4 col-sm-6 col-10 mt-4">
                        <a href="medicine_item.php?<?php echo "m_id=" . $m_row["m_id"] ?>"
                            class="card text-decoration-none text-black ">
                            <img <?php if ($m_row["m_pic"]) {
                                echo "src=\"./img/drugs/{$m_row["m_pic"]}\"";
                            } else {
                                echo "src=./img/drugs/default.png";
                            } ?> class="card-img-top" alt="...">
                            <div class="row card-body m-0 p-3 bg-main text-white rounded-bottom-1">
                                <div class="col-10">
                                    <h5 class="card-title text-truncate">
                                        <?= $m_row["m_name"] ?>
                                    </h5>
                                    <h6 class="card-title money" id="">
                                        <?php echo number_format($m_row["m_price"], 0, ',', '.'); ?> VND
                                    </h6>
                                </div>
                                <!-- <div class="col-2 text-end">
                            <div class="btn-primary rounded-circle h2"><i class="fa-solid fa-circle-plus"></i></div>
                        </div> -->
                            </div>
                        </a>
                    </div>
                <?php }
            } ?>
        </div>
    </div>


    <!--  -->


    <!--  -->
    <?php include('footer.php'); ?>
</body>

</html>