<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    session_start();
    include('admin_head.php');
    include("../conn_db.php");
    ?>
    <title>Edit User</title>
</head>
<body>
    <?php 
        include("admin_header.php");
    ?>
   <div class="container mt-5">
        <div class="navbar bg-body-tertiary">
            <div class="h6">
                <a href="admin_index.php">Home Page</a>
                <span>></span>
                <a href="">Edit User</a>
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
            $query = "SELECT * FROM User";
            $result = $mysqli->query($query);

            if ($result->num_rows > 0) {
                while ($u_row = $result->fetch_array()) {
            ?>
                <div class="col col-xl-3 col-lg-3 col-md-4 col-sm-6 col-10 mt-4">
                    <div class="card text-center">
                        <?php if ($u_row["u_avatar"] == null) {
                                if ($u_row["u_gender"] == "Male") { ?> 
                                    <img src="../img/avatar/default_boy.png" class="card-img-top pt-2 m-auto"  style="width: 15rem" alt="..."><?php } else { 
                                    if ($u_row["u_gender"] == "Female") {?><img src="../img/avatar/default_women.png" class="card-img-top pt-2 m-auto"  style="width: 15rem" alt="..."><?php } else { 
                                        if ($u_row["u_gender"] == "Other") {?> <img src="../img/avatar/default_other.png" class="card-img-top pt-2 m-auto"  style="width: 15rem" alt="..."> <?php } 
                                        } 
                                        } ?><?php ?>
                                  
                        <?php } else {?><img <?php echo "src=\"../img/avatar/{$u_row["u_avatar"]}\"";?> class="card-img-top pt-2 m-auto"  style="width: 15rem" alt="..."><?php } ?>
                        
                        
                        <div class="row card-body m-0 p-3 bg-main text-white rounded-bottom-1 text-start">
                            <div class="col-10">
                                <h5 class="card-title name text-truncate"><?= $u_row["u_firstName"] ?></h5>
                                <h6 class="card-title email text-truncate " id=""><?= $u_row["u_email"] ?></h6>
                            </div>
                        </div>
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