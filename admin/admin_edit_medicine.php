<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    session_start();
    include("../conn_db.php");

    include('admin_head.php');
    ?>
    <title>Update Item</title>
</head>

<body class="d-flex flex-column h-100">
    <?php include('admin_header.php') ?>

    <div class="container form-signin mt-auto w-50">
        <a class="nav nav-item text-decoration-none text-muted" href="#" onclick="history.back();">
            <i class="bi bi-arrow-left-square me-2"></i>Go back
        </a>
        <?php
        $f_id = $_GET["m_id"];
        $query = "SELECT * FROM medicine WHERE m_id = {$f_id} LIMIT 0,1";
        $result = $mysqli->query($query);
        $row = $result->fetch_array();
        ?>
        <h2 class="mt-4 mb-3 fw-normal text-bold"><i class="bi bi-pencil-square me-2"></i>Update Menu Detail</h2>

        <div class="row">
            <div class="col-4">
                <div class="logo">
                    <img <?php if (is_null($row["m_pic"])) {
                            echo "src='../img/drugs/default.png'";
                        } else {
                            echo "src=\"../img/drugs/{$row['m_pic']}\"";
                        }?> class="img-thumbnail" alt="">
                </div>
            </div>
            <div class="col-8">
                <form method="POST" action="admin_edit_medicine.php" class="form-floating" enctype="multipart/form-data">
                    <div class="form-floating mb-2">
                        <input type="text" class="form-control" id="m_name" placeholder="f_name" name="f_name"
                            value="<?php echo $row["m_name"]; ?>" required>
                        <label for="f_name">Menu Name</label>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="number" step=".25" min="1.000" max="1.000.000" class="form-control" id="m_price"
                            placeholder="Price (THB)" value="<?php echo $row["m_price"]; ?>" name="m_price" required>
                        <label for="m_price">Price (VND)</label>
                    </div>
                    <input type="hidden" name="m_id" value="<?php echo $m_id; ?>">
                    <button class="w-100 btn btn-success mb-3" name="upd_confirm" type="submit">Update Medicine Detail</button>
                </form>
            </div>
        </div>
    </div>

    <?php include '../footer.php'; ?>
</body>

</html>