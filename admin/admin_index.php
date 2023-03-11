<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    session_start();
    include('admin_head.php');
    include("../conn_db.php");
    ?>
    <title>Admin Dashboard</title>
</head>

<body>
    <?php 
        include("admin_header.php");
    ?>

    <div class="container mt-5 fs-2">
        <div class="row">
            <div class="col-6 px-4">
                <div class="card p-4 border-danger">
                    <div class="cart-title">USER INFORMATION</div>
                    <div class="card-text fs-3">Total: 
                        <?php 
                            $user_query = "SELECT COUNT(*) AS s_user FROM user";
                            $user_result = $mysqli->query($user_query);
                            $user_result = $user_result->fetch_array();
                            echo $user_result["s_user"];
                        ?>
                    </div>
                    <div class="text-end me-4">
                        <a href="admin_edit_user.php" class="btn btn-primary w-25">Edit</a>
                    </div>
                    
                </div>
            </div>
            <div class="col-6 px-4">
                <div class="card p-4 border-primary">
                    <div class="cart-title">MEDICINE INFORMATION</div>
                    <div class="cart-text fs-3">Total: 
                        <?php 
                            $medicine_query = "SELECT COUNT(*) AS s_medicine FROM medicine";
                            $medicine_result = $mysqli->query($medicine_query);
                            $medicine_result = $medicine_result->fetch_array();
                            echo $medicine_result["s_medicine"];
                        ?>
                    </div>
                    <div class="text-end me-4">
                        <a href="#" class="btn btn-primary w-25">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 
        include("../footer.php");
    ?>
</body>

</html>