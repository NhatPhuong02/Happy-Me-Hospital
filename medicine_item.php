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
    <script type="text/javascript" src="js/index.js"></script>

    <title>Medicine </title>
</head>

<body class="d-flex flex-column h-100">
    <?php 
        include('header.php');
        $m_id = $_GET["m_id"];
        $query = "SELECT m.* FROM medicine m  WHERE m.m_id = {$m_id}  LIMIT 0,1";
        $result = $mysqli -> query($query);
        $medicine_row = $result -> fetch_array();
    ?>
    <div class="container px-5 py-4" id="shop-body">
        <div class="row my-4">
            <a class="nav nav-item text-decoration-none text-muted mb-2" href="#" onclick="history.back();">
                <i class="bi bi-arrow-left-square me-2"></i>Go back
            </a>
        </div>
        <div class="row row-cols-1 row-cols-md-2 mb-5">
            <div class="col mb-3 mb-md-0 logo">
                <img 
                    <?php
                        if(is_null($medicine_row["m_pic"])){echo "src='img/avatar/admin.png'";}
                        else{echo "src=\"img/drugs/{$medicine_row['m_pic']}\"";}
                    ?> 
                    class="img-fluid rounded-25 float-start" 
                    alt="<?php echo $medicine_row["m_name"]?>">
            </div>
            <div class="col text-wrap">
                <h1 class="fw-light"><?php echo $medicine_row["m_name"]?></h1>
                <h3 class="fw-light"><?php echo $medicine_row["m_price"]?> VND</h3>
                <ul class="list-unstyled mb-3 mb-md-0">
                    
                </ul>
                <div class="form-amount">
                    <form class="mt-3" method="POST" action="add_item.php">
                        <div class="input-group mb-3">
                            <button id="sub_btn" class="btn btn-outline-secondary" type="button" title="subtract amount" onclick="sub_amt('amount')">
                                <i class="fa-solid fa-minus"></i>
                            </button>
                            <input type="number" class="form-control text-center border-secondary" id="amount"
                                name="amount" value="1" min="1" max="99">
                            <button id="add_btn" class="btn btn-outline-secondary" type="button" title="add amount" onclick="add_amt('amount')">
                                <i class="fa-solid fa-plus"></i>
                            </button>
                        </div>
                        <input type="hidden" name="s_id" value="<?php echo $s_id?>">
                        <input type="hidden" name="f_id" value="<?php echo $f_id?>">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="addrequest" name="request" placeholder=" ">
                            <label for="addrequest" class="d-inline-text">Additional Request (Optional)</label>
                            <div id="addrequest_helptext" class="form-text">
                                Such as no veggie.
                            </div>
                        </div>
                        <button class="btn btn-success w-100" type="submit" title="add to cart" name="addtocart"
                        <?php
                            $cartsearch_query1 = "SELECT COUNT(*) AS cnt FROM cart WHERE c_id = {$_SESSION['cid']}";
                            $cartsearch_row1 = $mysqli -> query($cartsearch_query1) -> fetch_array();
                            if($cartsearch_row1["cnt"]>0){
                                $cartsearch_query2 = $cartsearch_query1." AND s_id = {$s_id}";
                                $cartsearch_row2 = $mysqli -> query($cartsearch_query2) -> fetch_array();
                                if($cartsearch_row2["cnt"]==0){?>
                                    onclick="javascript: return changeshopcf();"<?php 
                                } 
                            }
                        ?>
                        >
                            <svg xmlns='http://www.w3.org/2000/svg\\' width='16' height='16' fill='currentColor'
                                class='bi bi-cart-plus' viewBox='0 0 16 16'>
                                <path
                                    d='M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z' />
                                <path
                                    d='M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z' />
                            </svg> Add to cart
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php $result -> free_result();?>
    </div>
</body>