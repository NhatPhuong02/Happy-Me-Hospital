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
    ?>
    <title>List Medicine</title>
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
            <h2 class="pt-3 display-6">Menu List</h2>
            <form class="form-floating mb-3" method="GET" action="admin_list_medicine.php">
                <div class="row g-2">
                    <div class="col">
                        <input type="text" class="form-control" id="m_name" name="m_name" placeholder="Medicine name"
                            <?php if(isset($_GET["search"])){?>value="<?php echo $_GET["m_name"];?>" <?php } ?>>
                    </div>
                    <div class="col-auto">
                        <button type="submit" name="search" value="1" class="btn btn-success">Search</button>
                        <button type="reset" class="btn btn-danger"
                            onclick="javascript: window.location='admin_list_medicine.php'">Clear</button>
                        <a href="admin_medicine_add.php" class="btn btn-primary">Add new Medicine</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="container pt-2" id="cust-table">

        <?php
            if(!isset($_GET["search"])){
                $search_query = "SELECT * FROM medicine;";
            }else{
                $search_fn=$_GET["m_name"];
                $search_query = "SELECT * FROM medicine WHERE m_name LIKE '%{$search_fn}%'";
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
                <a href="admin_list_medicine.php" class="text-white">Clear Search Result</a>
            </div>
        </div>
        <?php } else{ ?>
        <div class="table-responsive">
        <table class="table rounded-5 table-light table-striped table-hover align-middle caption-top mb-5">
            <caption><?php echo $search_numrow;?> medicine(s) <?php if(isset($_GET["search"])){?><br /><a
                    href="admin_list_medicine.php" class="text-decoration-none text-danger">Clear Search
                    Result</a><?php } ?></caption>
            <thead class="bg-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th class = "text-center" scope="col">Quantity</th>
                    <th class = "text-center" scope="col">Price(VND)</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                <?php $i=1; while ($row = $search_result -> fetch_array()){ ?>
                <tr>
                    <th><?php echo $i++;?></th>
                    <td class="w-25"><img <?php if (is_null($row["m_pic"])) {
                            echo "src='../img/drugs/default.png'";
                        } else {
                            echo "src=\"../img/drugs/{$row['m_pic']}\"";
                        }?> class ="img-thumbnail w-25" src="img/avatar/"></td>
                    <td><?php echo $row["m_name"];?></td>
                    <td class = "text-center"><?php echo $row["m_quantity"];?></td>
                    <td class = "text-center"><?php echo number_format($row["m_price"],"0",",",".");?></td>
                    <td>
                        <a href="admin_detail_medicine.php?m_id=<?php echo $row["m_id"]?>"
                            class="btn btn-sm btn-primary">View</a>
                        <a href="admin_edit_medicine.php?m_id=<?php echo $row["m_id"];?>"
                            class="btn btn-sm btn-outline-success">Edit</a>
                        <a href="admin_delete_medicine.php?m_id=<?php echo  $row["m_id"]?>"
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
    <?php 
        include("../footer.php");
    ?>
</body>
</html>