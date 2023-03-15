<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    session_start();
    include('admin_head.php');
    include("../conn_db.php");
    ?>
    <title>List User</title>
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
                <a href="">List User</a>
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
                                    <img src="../img/avatar/default_man.png" class="card-img-top pt-2 m-auto"  style="width: 15rem" alt="..."><?php } else { 
                                    if ($u_row["u_gender"] == "Female") {?><img src="../img/avatar/default_women.png" class="card-img-top pt-2 m-auto"  style="width: 15rem" alt="..."><?php } else { 
                                        if ($u_row["u_gender"] == "Other") {?> <img src="../img/avatar/default_other.png" class="card-img-top pt-2 m-auto"  style="width: 15rem" alt="..."> <?php } 
                                        } 
                                        } ?><?php ?>
                                  
                        <?php } else {?><img <?php echo "src=\"../img/avatar/{$u_row["u_avatar"]}\"";?> class="card-img-top pt-2 m-auto"  style="width: 15rem" alt="..."><?php } ?>
                        
                        
                        <div class="row card-body m-0 p-3 bg-main text-white rounded-bottom-1 text-start">
                            <div class="col-12">
                                <h5 class="card-title name text-truncate"><?= $u_row["u_firstName"] ?></h5>
                                <h6 class="card-title email text-truncate " id=""><?= $u_row["u_email"] ?></h6>
                                <select class="form-select" id="s_id" name="s_id"><?= $u_row["u_role"] ?>
                                    <?php
                                        $option_query = "SELECT DISTINCT u_role FROM user";
                                        $option_result = $mysqli -> query($option_query);
                                        $opt_row = $option_result -> num_rows;
                                        if($option_result -> num_rows != 0){
                                         $option_result = $option_result->fetch_array();
                                    ?>
                                    
                                    <option value="admin" <?php if ($option_result["u_role"] == "admin") {
                                                echo "selected";
                                            } ?>>Admin</option>
                                    <option value="patient" <?php if ($option_result["u_role"] == "patient") {
                                                echo "selected";
                                            } ?>>Patient</option>
                                    <option value="therapist" <?php if ($option_result["u_role"] == "therapist") {
                                                echo "selected";
                                            } ?>>Therapist</option>
                                    <?php
                                        }
                                    ?>
                                </select>
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