<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        include ('head.php');
        include ('conn_db.php');
    ?>
    <title>Welcome Happy Me</title>
</head>

<body>
    <?php
        include ('header.php');
    ?>
    
    <div class="container">
        <div class="row">
            <div class="col-6">
                Prodcut
            </div>
            <div class="col-2">
                Quatity
            </div>
            <div class="col-2">
                Price
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <img src="/img/drugs/fetzima.jpg"   alt="">
            </div>
            <div class="col-2">
                1
            </div>
            <div class="col-2">
                100.000 VND
            </div>
            <div class="col-2">
                <button class="btn btn-danger"></button>
            </div>
        </div>
    </div>
</body>