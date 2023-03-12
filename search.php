<!DOCTYPE html>
<html lang="en">
<head>
   <?php 
    include("head.php");
    include("conn_db.php");

   ?>
</head>
<body class="d-flex flex-column h-100">

    <?php include('header.php')?>

    <div class="container p-2 pb-0" id="admin-dashboard">
        <div class="mt-4 border-bottom">
            <a class="nav nav-item text-decoration-none text-muted mb-2" href="#" onclick="history.back();">
                <i class="bi bi-arrow-left-square me-2"></i>Go back
            </a>

            

            <h2 class="pt-3 display-6">Menu List</h2>
            <form class="form-floating mb-3" method="GET" action="search.php">
                <div class="row g-2">
                    <div class="col">
                        <input type="text" class="form-control" id="f_name" name="f_name" placeholder="Food name"
                            <?php if(isset($_GET["search"])){?>value="<?php echo $_GET["f_name"];?>" <?php } ?>>
                    </div>
                    <div class="col">
                        <select class="form-select" id="s_id" name="s_id">
                            <option selected value="">Role</option>
                            <?php
                                $option_query = "SELECT DISTINCT u_role FROM user;";
                                $option_result = $mysqli -> query($option_query);
                                $opt_row = $option_result -> num_rows;
                                if($option_result -> num_rows != 0){
                                    while($option_arr = $option_result -> fetch_array()){
                            ?>
                            <option value="<?php echo $option_arr["u_role"]?>"><?php echo $option_arr["u_role"];?></option>
                            <?php
                                    }
                                }
                            ?>
                        </select>
                    </div>
                    <div class="col-auto">
                        <button type="submit" name="search" value="1" class="btn btn-success">Search</button>
                        <button type="reset" class="btn btn-danger"
                            onclick="javascript: window.location='admin_food_list.php'">Clear</button>
                        <a href="admin_food_add.php" class="btn btn-primary">Add new menu</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="container pt-2" id="cust-table">

        <?php
            if(!isset($_GET["search"])){
                $search_query = "SELECT * FROM user;";
            }else{
                $search_fn=$_GET["f_name"];
                $search_query = "SELECT * FROM user WHERE u_firstName LIKE '%{$search_fn}%'";
            }
            $search_result = $mysqli -> query($search_query);
            $search_numrow = $search_result -> num_rows;
            if($search_numrow == 0){
        ?>
        <div class="row">
            <div class="col mt-2 ms-2 p-2 bg-danger text-white rounded text-start">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-x-circle ms-2" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                    <path
                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                </svg><span class="ms-2 mt-2">No shop found!</span>
                <a href="admin_food_list.php" class="text-white">Clear Search Result</a>
            </div>
        </div>
        <?php } else{ ?>
        <div class="table-responsive">
        <table class="table rounded-5 table-light table-striped table-hover align-middle caption-top mb-5">
            <caption><?php echo $search_numrow;?> menu(s) <?php if(isset($_GET["search"])){?><br /><a
                    href="admin_food_list.php" class="text-decoration-none text-danger">Clear Search
                    Result</a><?php } ?></caption>
            <thead class="bg-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Role</th>
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1; while ($row = $search_result -> fetch_array()){ ?>
                <tr>
                    <th><?php echo $i++;?></th>
                    <td><?php echo $row["u_firstName"];?></td>
                    <td><?php echo $row["u_lastName"];?></td>
                    <td><?php echo $row["u_role"];?></td>
                    <td><?php echo $row["u_address"];?></td>
                    <td>
                        <a href="admin_food_detail.php?u_id=<?php echo $row["u_id"]?>"
                            class="btn btn-sm btn-primary">View</a>
                        <a href="admin_food_edit.php?u_id=<?php echo $row["u_id"];?>&u_id=<?php echo $row["u_id"]?>"
                            class="btn btn-sm btn-outline-success">Edit</a>
                        <a href="admin_food_delete.php?u_id=<?php echo $row["u_id"]?>"
                            class="btn btn-sm btn-outline-danger">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        </div>
        <?php }
            $search_result -> free_result();
        ?>
    </div>

    <?php include 'footer.php';?>
</body>
</html>