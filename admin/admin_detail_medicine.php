<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    session_start();
    include("../conn_db.php");
    if (!isset($_SESSION['id'])) {
        header("Location: ../signIn.php");
        exit(1);
    }
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
        $m_id = $_GET["m_id"];
        $query = "SELECT * FROM medicine WHERE m_id = {$m_id} LIMIT 0,1";
        $result = $mysqli->query($query);
        $row = $result->fetch_array();
        ?>
        <h2 class="mt-4 mb-3 fw-normal text-bold"><i class="bi bi-pencil-square me-2"></i>Update Menu Detail</h2>
        <input type="hidden" class="form-control" name="m_id" value="<?= $m_id ?>">
        <div class="row">
            <div class="col-4">
                <div class="logo">
                    <img <?php if (is_null($row["m_pic"])) {
                        echo "src='../img/drugs/default.png'";
                    } else {
                        echo "src=\"../img/drugs/{$row['m_pic']}\"";
                    } ?> class="img-thumbnail" alt="">
                </div>
            </div>
            <div class="col-8">
                <div class="form-floating mb-2">
                    <input type="text" class="form-control" id="m_name" placeholder="m_name" name="m_name"
                        readonly="True" value="<?php echo $row["m_name"]; ?>" required>
                    <label for="f_name">Menu Name</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="number" class="form-control" id="m_price" placeholder="Price (THB)" readonly="True"
                        value="<?php echo $row["m_price"]; ?>" name="m_price" required>
                    <label for="m_price">Price (VND)</label>
                </div>
                <input type="hidden" name="m_id" value="<?php echo $m_id; ?>">
                <a href="admin_edit_medicine.php?m_id=<?= $m_id ?>" class="w-100 btn btn-success mb-3"
                    name="upd_confirm" type="button">Edit</a>

            </div>
        </div>
    </div>

    <?php include '../footer.php'; ?>
</body>

</html>