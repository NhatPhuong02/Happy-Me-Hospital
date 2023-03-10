<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    session_start();
    include('head.php');
    include('conn_db.php');
    ?>
    <title>Welcome Happy Me</title>
</head>

<body>
    <?php
    include('header.php');
    ?>
    <div class="container mt-5">
        <div class="navbar bg-body-tertiary">
            <div class="h6">
                <a href="index.php">Home Page</a>
                <span>></span>
                <a href="">Cart</a>
            </div>
            <form class="d-flex" role="search">
                <div class="input-group">
                    <span class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></span>
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </div>
            </form>
        </div>
        <div class="container">
            <div class="row fs-4 bg-main mt-5 p-3 rounded-3">
                <div class="col-6">
                    Product
                </div>
                <div class="col-2 text-center">
                    Quatity
                </div>
                <div class="col-2 text-center text-middle">
                    Price (VND)
                </div>
            </div>

            <form action="delete_item.php" method="post">
                <?php
                $query = "SELECT m.*,c.* FROM cart c, medicine m WHERE c.User_u_id = {$_SESSION["id"]} AND m.m_id = c.Medicine_m_id";
                $list = $mysqli->query($query);
                if ($list->num_rows > 0) {
                    while ($result = $list->fetch_array()) { ?>
                        <div class="row  mt-4 align-middle bg-main-2 p-4 rounded-3">
                            <div class="col-6 p-0">
                                <div class="row">
                                    <div class="col-2 logo">
                                        <img <?php echo "src=\"./img/drugs/{$result["m_pic"]}\"" ?> class="img-thumbnail bg-white" alt="logo">
                                    </div>
                                    <div class="col-10">
                                        <div class="title fs-4"><?php echo $result["m_name"] ?></div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" class="form-control" id="m_id" name="m_id" value="<?php echo $result["m_id"] ?>">
                            <div class="col-2 my-4 text-center fs-4"><span><?php echo $result["c_quantity"] ?></span></div>
                            <div class="col-2 my-4 text-center h-50 fs-4"><?php echo $result["m_price"] ?></div>
                            <div class="col-2 my-4 text-center ">
                                <a href="delete_item.php?m_id=<?php echo $result["m_id"] ?>" type="button" class="btn btn-lg btn-outline-danger col-4 bg-main rounded-3" style="color:#FFF" name="del_btn"> <i class="fa-sharp fa-solid fa-trash-can"></i> </a>
                            </div>
                        </div>
                <?php }
                } ?>
            </form>





            <div class="row justify-content-end ">
                <?php
                $sum_price = 0;
                $query2 = "SELECT c.c_quantity, m.m_price FROM cart c, medicine m WHERE c.User_u_id = {$_SESSION["id"]} AND m.m_id = c.Medicine_m_id";
                $list1 = $mysqli->query($query2);
                while ($result1 = $list1->fetch_array()) {
                    $sum_price_quatity = ((int)$result1["c_quantity"]) * ((int)$result1["m_price"]);
                    $sum_price = $sum_price + $sum_price_quatity;
                }

                $tax = $sum_price * 10 / 100;
                $total = $sum_price + $tax
                ?>
                <hr class=" my-3 w-50 bg-main" size="7px">
                <div class="w-100"></div>
                <div class="col-2 p-2 h5">Subtotal</div>
                <div class="col-2 p-2 h5 text-end"><?php echo $sum_price ?></div>
                <div class="w-100"></div>
                <div class="col-2 p-2 h5">Tax (10%)</div>
                <div class="col-2 p-2 h5 text-end"><?php echo $tax ?></div>
                <div class="w-100"></div>
                <div class="col-2 p-2 h4">Total</div>
                <div class="col-2 p-2 h4 text-end"><?php echo $total ?></div>
                <div class="w-100"></div>
                <button type="button" class="btn btn-lg btn-light col-4 bg-main me-1 rounded-3" style="color: #FFF "> Proceed to checkout <i class="fa-sharp fa-solid fa-arrow-right"></i> </button>
            </div>
            <?php include('footer.php') ?>
        </div>
</body>