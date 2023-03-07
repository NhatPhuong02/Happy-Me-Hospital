<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        session_start();
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
        <div class="row fs-3 bg-main mt-5 p-3 rounded-3">
            <div class="col-6">
                Product
            </div>
            <div class="col-2 text-center">
                Quatity
            </div>
            <div class="col-2 text-center text-middle">
                Price (VND)
            </div>
        </div>
        <div class="row  mt-4 align-middle bg-main-2 p-4 rounded-3">
            <div class="col-6 p-0">
                <div class="row">
                    <div class="col-4 logo w-25">
                        <img src= "./img/drugs/anafranil.jpeg" class="img-thumbnail bg-white" alt="logo">
                    </div>
                    <div class="col-8">
                        <div class="title fs-4">Anafranil</div>
                        <div class="note opacity-50 fs-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi accumsan pulvinar libero, ac euismod urna pretium eu. Sed accumsan pretium augue consequat ornare. </div>
                    </div>
                </div>
            </div>
            <div class="col-2 align-middle text-center fs-4"><span>2</span></div>
            <div class="col-2 align-middle text-center h-50 fs-4">100.000</div>
           <div class="col-2 align-middle text-center ">
            <div class="btn btn-outline-danger w-50 h-25 fs-4 p-0">Delete</div>
           </div>
        </div>
        <div class="row justify-content-end">
            <hr class=" my-3 bg-main w-50" size="7px">
            <div class="w-100"></div>
              <div class="col-2 p-2 h5">Subtotal</div>
              <div class="col-2 p-2 h5">$36.00</div>
              <div class="w-100"></div>
              <div class="col-2 p-2 h5">Tax (10%)</div>
              <div class="col-2 p-2 h5">$3.60</div>
              <div class="w-100"></div>
              <div class="col-2 p-2 h4">Total</div>
              <div class="col-2 p-2 h4">$39.60</div>
              <div class="w-100"></div>
              <button type="button" class="btn btn-sm btn-light col-4 bg-main me-5 rounded-3" style="color: #FFF "> Proceed to checkout <i class="fa-sharp fa-solid fa-arrow-right"></i> </button>
            </div>
          </div>
          <?php include('footer.php')?>
    </div>
</body>