<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        Session_start();
        include("conn_db.php");

        if(!isset($_SESSION["id"])){
            header("location: signUp.php");
            exit(1);
        }
        if(isset($_POST["rst_confirm"])){
            $oldpwd = $_POST["old_pwd"];
            $newpwd = $_POST["new_pwd"];
            $newcfpwd = $_POST["new_cfpwd"];
            if($newpwd != $newcfpwd){
                ?>
                    <script>
                        alert('Your new password is not match.\nPlease re-enter again.');
                        history.back();
                    </script>;
                <?php
                exit(1);
            }else{
                $query = "SELECT u_password FROM user  WHERE u_id = {$_SESSION['id']} LIMIT 0,1";
                $result = $mysqli -> query($query);
                $row = $result -> fetch_array();
                if(password_verify($oldpwd, $row["u_password"])){
                    $newpwd = password_hash($newpwd, PASSWORD_DEFAULT);
                    $query = "UPDATE user SET u_password = '{$newpwd}' WHERE u_id = {$_SESSION['id']}";
                    $result = $mysqli -> query($query);
                    if($result){
                        header("location: user_profile.php?up_pwd=1");
                    }else{
                        header("location: user_profile.php?up_pwd=0");
                    }
                }else{
                    ?>
                    <script>
                        alert('Your old password is not match.\nPlease re-enter again.');
                        history.back();
                    </script>
                    <?php
                    exit(1);
                }
            }
        }
        include("head.php") ;
    ?> 
    <title>Change Password</title>          
</head>


<body>
<?php include("header.php")?> 
    <div class="container form-signin mt-auto w-50">
        <a class="nav nav-item text-decoration-none text-muted" href="#" onclick="history.back();">
            <i class="bi bi-arrow-left-square me-2"></i>Go back
        </a>
        <form method="POST" action="user_update_pwd.php" class="form-floating">
            <h2 class="mt-4 mb-3 fw-normal text-bold"><i class="bi bi-key me-2"></i>Update Password</h2>
            <div class="form-floating mb-2">
                <input type="password" class="form-control" id="old_pwd" minlength="8" maxlength="45" placeholder="Old Password" name="old_pwd"
                    required>
                <label for="old_pwd">Old Password</label>
            </div>
            <div class="form-floating mb-2">
                <input type="password" class="form-control" id="rst_pwd" minlength="8" maxlength="45" placeholder="New Password" name="new_pwd"
                    required>
                <label for="rst_pwd">New Password</label>
            </div>
            <div class="form-floating mb-2">
                <input type="password" class="form-control" id="rst_cfpwd" minlength="8" maxlength="45" placeholder="Confirm New Password"
                    name="new_cfpwd" required>
                <label for="rst_cfpwd">Confirm New Password</label>
                <div id="passwordHelpBlock" class="form-text smaller-font">
                    Your password must be at least 8 characters long.
                </div>
            </div>
            <button class="w-100 btn btn-success my-3" name="rst_confirm" type="submit" onclick="return confirm('Do you want to update your password?');" >Update Password</button>
        </form>
    </div>
    <!-- footer -->
    <?php include("footer.php")?> 
</body>

</html>