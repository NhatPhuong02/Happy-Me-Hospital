<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        session_start();
        include('head.php');
        include('conn_db.php');
    ?>
    <title>Document</title>
</head>
<body>
    <?php
        include('header.php');?>

   
    
    <div class="container form-signin mt-4 w-25">
    <a class="nav nav-item text-decoration-none text-muted" href="#" onclick="history.back();">
        <i class="bi bi-arrow-left-square me-2"></i>Go back
    </a>
    <?php 
        //Select customer record from database
        $query = "SELECT u_firstName,u_lastName,u_email,u_gender,u_phone FROM users WHERE u_id = {$_SESSION['id']} LIMIT 0,1";
        $result = $mysqli ->query($query);
        $row = $result -> fetch_array();
    ?>
    <form method="POST" action="cust_update_profile.php" class="form-floating">
        <h2 class="mt-4 mb-3 fw-normal text-bold"><i class="bi bi-pencil-square me-2"></i>Update Profile</h2>
        <div class="form-floating mb-2">
            <input type="text" class="form-control" id="firstname" placeholder="First Name" name="firstname" value="<?php echo $row["u_firstName"];?>" required>
            <label for="firstname">First Name</label>
        </div>
        <div class="form-floating mb-2">
            <input type="text" class="form-control" id="lastname" placeholder="Last Name" name="lastname" value="<?php echo $row["u_lastName"];?>" required>
            <label for="lastname">Last Name</label>
        </div>
        <div class="form-floating mb-2">
            <input type="text" class="form-control" id="email" placeholder="E-mail" name="email" value="<?php echo $row["u_email"];?>" required>
            <label for="email">E-mail</label>
        </div>
        <div class="form-floating mb-2">
            <input type="text" class="form-control" id="phone" placeholder="Phone" name="phone" value="<?php echo $row["u_phone"];?>" required>
            <label for="phone">Phone</label>
        </div>
    </form>
    <button class="w-100 btn btn-success mb-3" name="upd_confirm" type="submit">Update Profile</button>
    </div>
    <?php include 'footer.php';?>
    <!-- not yet button action onclick -->
</body>
</html>