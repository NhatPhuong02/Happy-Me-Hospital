<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    session_start();
    include('admin_head.php');
    include("../conn_db.php");
    if (!isset($_SESSION['id'])) {
        header("Location: ../signIn.php");
        exit(1);
    }

    if(isset($_POST["edit_confirm"])){
        $u_id_edit_role = $_POST["m_id_edit_role"];
        $u_role = $_POST["role"];

        $query = "UPDATE user SET u_role = '{$u_role}' WHERE u_id = {$u_id_edit_role}";
        $result = $mysqli->query($query);
    }
    ?>
    <title>List User</title>
</head>
<body>
    <?php 
        include("admin_header.php");
    ?>
    <div class="container">
    <div class="mt-4 border-bottom">
            <a class="nav nav-item text-decoration-none text-muted mb-2" href="#" onclick="history.back();">
                <i class="bi bi-arrow-left-square me-2"></i>Go back
            </a>
            <h2 class="pt-3 display-6">User List</h2>
            <form class="form-floating mb-3" method="GET" action="admin_list_user.php">
                <div class="row g-2">
                    <div class="col">
                        <input type="text" class="form-control" id="m_name" name="m_name" placeholder="User name"
                            <?php if(isset($_GET["search"])){?>value="<?php echo $_GET["m_name"];?>" <?php } ?>>
                    </div>
                    <div class="col-auto">
                        <button type="submit" name="search" value="1" class="btn btn-success">Search</button>
                        <button type="reset" class="btn btn-danger"
                            onclick="javascript: window.location='admin_list_user.php'">Clear</button>
                        <a href="admin_add_user.php" class="btn btn-primary">Add new User</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
   <div class="container mt-5">
        <div class="row mt-5 justify-content-start">
            <?php
            $query = "SELECT * FROM User";
            $result = $mysqli->query($query);

            if ($result->num_rows > 0) {
                while ($u_row = $result->fetch_array()) {
            ?> 
            
                <div class="col col-xl-3 col-lg-3 col-md-4 col-sm-6 col-10 mt-4">
                    <div class="card text-center">
                        <?php if ($u_row["u_avatar"] == null) {
                                if ($u_row["u_gender"] == "Male") { ?> 
                                    <img src="../img/avatar/default_man.png" class="card-img-top pt-2 m-auto"  style="width: 15rem" alt="..."><?php } else { 
                                    if ($u_row["u_gender"] == "Female") {?><img src="../img/avatar/default_women.png" class="card-img-top pt-2 m-auto"  style="width: 15rem" alt="..."><?php } else { 
                                        if ($u_row["u_gender"] == "Other") {?> <img src="../img/avatar/default_other.png" class="card-img-top pt-2 m-auto"  style="width: 15rem" alt="..."> <?php } 
                                        } 
                                        } ?><?php ?>
                                  
                        <?php } else {?><img <?php echo "src=\"../img/avatar/{$u_row["u_avatar"]}\"";?> class="card-img-top pt-2 m-auto"  style="width: 15rem" alt="..."><?php } ?>
                        <form method="POST" action="admin_list_user.php" class="form-floating" enctype="multipart/form-data">
                            <div class="row card-body m-0 p-3 bg-main text-white rounded-bottom-1 text-start">
                                <div class="col-12">
                                    <h5 class="card-title name text-truncate"><?= $u_row["u_firstName"]?></h5>
                                    <h6 class="card-title email text-truncate"><?= $u_row["u_email"]?></h6>
                                </div>
                                <div class="form my-3 col-8">
                                        <select class="form-select "name="role" id="role">
                                            <option value="admin" <?php if($u_row["u_role"]=="admin"){echo "selected";}?>>Admin</option>
                                            <option value="therapist" <?php if($u_row["u_role"]=="therapist"){echo "selected";}?>>Therapist</option>
                                            <option value="patient" <?php if($u_row["u_role"]=="patient"){echo "selected";}?>>Patient</option>
                                        </select>
                                        <input type="hidden" class="form-control" name="m_id_edit_role" value="<?= $u_row["u_id"] ?>">
                                </div>
                                <div class="col-4 my-3 text-center">
                                    <a href="admin_delete_user.php?u_id=<?php echo $u_row["u_id"]?>" type="button" class="btn btn-danger">DELETE</a>
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="w-50 btn btn-success mt-1" name="edit_confirm" type="submit">Edit</button>
                            </div>
                        </form>
                    </div>
                </div>
            <?php }
            } ?>
        </div>
    </div>
    <?php 
        include("../footer.php");
    ?>
</body>
</html>