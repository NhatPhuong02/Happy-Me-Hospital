<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    session_start();
    include('head.php');
    include('conn_db.php');



    if (isset($_POST["submit"])) {
        $firstname = $_POST["firstName"];
        $lastname = $_POST["lastName"];
        $address = $_POST["address"];
        $gender = $_POST["gender"];
        $phone = $_POST['phone'];
        $pic = $_POST["u_pic"];

        $query = "UPDATE User SET u_firstName = '{$firstname}', u_lastName = '{$lastname}', u_address = '{$address}', u_gender = '{$gender}', u_Phone = '{$phone}' WHERE u_id = {$_SESSION["id"]}";
        $result = $mysqli->query($query);
        if ($result) {
            $_SESSION["firstName"] = $firstname;
            $_SESSION["lastName"] = $lastname;
            $_SESSION['address'] = $address;
            $_SESSION['gender'] = $gender;
            $_SESSION['phone'] = $phone;


            header("location: user_profile.php?up_prf=1");
        } else {
            header("location: user_profile.php?up_prf=0");
        }
        exit(1);
    }
    ?>
    <title>Document</title>
</head>

<body class="bg-gray-50 "></body>
    <?php
    include('header.php');
    ?>
    <div class="container form-signin mt-4 w-25">
        <a class="nav nav-item text-decoration-none text-muted" href="#" onclick="history.back();">
            <i class="bi bi-arrow-left-square me-2"></i>Go back
        </a>
        <?php
        //Select customer record from database
        $query = "SELECT u_firstName,u_lastName,u_email,u_gender,u_Phone, u_address FROM user WHERE u_id = {$_SESSION['id']} LIMIT 0,1";
        $result = $mysqli->query($query);
        $row = $result->fetch_array();
        ?>
        <form method="POST" action="user_update_info.php" class="form-floating">
            <h2 class="mt-4 mb-3 fw-normal text-bold"><i class="bi bi-pencil-square me-2"></i>Update Profile</h2>
            <div class="form-floating mb-2">
                <input type="text" class="form-control" id="firstname" placeholder="First Name" name="firstName"
                    value="<?php echo $row["u_firstName"]; ?>" required>
                <label for="firstname">First Name</label>
            </div>
            <div class="form-floating mb-2">
                <input type="text" class="form-control" id="lastname" placeholder="Last Name" name="lastName"
                    value="<?php echo $row["u_lastName"]; ?>" required>
                <label for="lastname">Last Name</label>
            </div>
            <div class="form-floating mb-2">
                <input type="text" class="form-control" id="phone" placeholder="Phone" name="phone"
                    value="<?php echo $row["u_Phone"]; ?>" required>
                <label for="phone">Phone</label>
            </div>
            <div class="form-floating mb-2">
                <input type="text" class="form-control" id="adđress" placeholder="Adđress" name="address"
                    value="<?php echo $row["u_address"]; ?>" required>
                <label for="address">Address</label>
            </div>
            <div class="form-floating">
                <select class="form-select mb-2" id="gender" name="gender">
                    <option value="Male" <?php if ($row["u_gender"] == "Male") {
                        echo "selected";
                    } ?>>Male</option>
                    <option value="Female" <?php if ($row["u_gender"] == "Female") {
                        echo "selected";
                    } ?>>Female</option>
                    <option value="Other" <?php if ($row["u_gender"] == "Other") {
                        echo "selected";
                    } ?>>Other</option>
                </select>
                <label for="gender">Your Gender</label>
            </div>
            <button class="w-100 btn btn-success my-3" name="submit" type="submit"
                onclick="return confirm('Do you want to update your information?');">Update Password</button>
        </form>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>