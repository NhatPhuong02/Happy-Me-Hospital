<?php
    session_start();
    include("../conn_db.php");
    $m_id = $_GET["m_id"];
    $delete_query = "DELETE FROM medicine WHERE m_id = {$m_id}";
    $delete_result = $mysqli -> query($delete_query);
    if($delete_result){
        header("location: admin_list_medicine.php?dl_m=1");
    }else{
        header("location: admin_list_medicine.php?dl_m=0");
    }
?>