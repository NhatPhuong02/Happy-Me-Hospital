<?php
    session_start();
    include("conn_db.php");

    if(!isset($_SESSION["id"])){
        header("locatiom: signIn.php");
        exit(1);
    }
    $m_id  = $_POST['m_id'];
    $u_id = $_SESSION['id'];
    $m_amount = $_POST["amount"];
    $query = "SELECT * FROM cart WHERE User_u_id = {$_SESSION["id"]}";
    $result = $mysqli->query($query);

    // check if dont have any item in cart 
    if($result->num_rows == 0){
        $update_query = "INSERT INTO cart (User_u_id, Medicine_m_id, c_quantity) VALUE ({$u_id}, {$m_id}, '{$m_amount}')";
        $atc_result = $mysqli -> query($update_query);
    }
    else{ // already have item in cart
        $result_arr = $result -> fetch_array(); 
        $incart = $result_arr["Medicine_m_id"]; // gán id m vào $incart
        // if already have same item in cart 
        $check_amount = "SELECT m_quantity FROM cart WHERE Medicine_m_id = {$m_id} AND User_u_id = {$u_id}";
        $result_check = $mysqli->query($check_amount);
        if($result_check->num_rows > 0){
            $sss = $result_check->fetch_array();
            $amount = $sss["m_quantity"];
            $m_amount = $m_amount + $amount;
            $update_query = "UPDATE cart SET m_quantity = {$amount} WHERE Medicine_m_id = {$m_id} AND User_u_id = {$u_id}";
            $atc_result = $mysqli -> query($update_query);
        }
        else{
            $update_query = "UPDATE cart SET m_quantity = {$m_amount} WHERE Medicine_m_id = {$m_id} AND User_u_id = {$u_id}";
            $atc_result = $mysqli -> query($update_query);
        }
    }

    if($atc_result)
    {
        header("Location: product.php?check_ss=1");
    }else{
        header("Location: product.php?check_ss=0");

    }
?>