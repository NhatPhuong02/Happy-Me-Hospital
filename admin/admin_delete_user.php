<?php
    include("../conn_db.php");

    $u_id = $_GET["u_id"];

    $query_delete = "DELETE FROM user WHERE u_id = {$u_id}";
    $query_result = $mysqli->query($query_delete);

    if( $query_result){
        header("location: admin_list_user.php?rs_id=1");
    }else{
        header("location: admin_list_user.php?rs_id=0");
    }
?>