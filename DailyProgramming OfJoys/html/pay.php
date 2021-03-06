<?php
  require('db_con.php');
  // ini_set('display_errors', 1);
  // error_reporting(~0);
  session_start();
  $_SESSION['money']=$_GET["money"];
  $_SESSION['coins']=$_GET["coins"];
  $sql = "UPDATE user SET coin=coin + '".$_GET["coins"]."' WHERE user_name = '" .$_SESSION["user_name"]."'";
  if (mysqli_query($conn, $sql)) {
    //echo "Record updated successfully";
    $sql = "SELECT coin FROM user WHERE user_name = '".$_SESSION["user_name"]."'";
    $objQuery = mysqli_query($conn, $sql);
    $objResult = mysqli_fetch_array($objQuery);
    $_SESSION["coin"] = $objResult[coin];
    //header("location:account.php");
  }
  else {
    echo "Error updating record: " . mysqli_error($conn);
  }
  mysqli_close($conn);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="payment_style.css">
    <link rel="stylesheet" href="account_style.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit:200,400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Averia+Serif+Libre" rel="stylesheet">


<!-- Navbar -->
    <nav class="site-header sticky-top py-1">
      <div class="container d-flex flex-column flex-md-row ">
        <div class="logo right">
                    <img class="py image-edit logo-set2" src="https://i.imgur.com/LrIcfUC.png"></img>
                </div>
        <a class="py-2 logo-set" href="#">Books Never Die</a>
        <a class="py-2 left-2" href="#">Coins</a>
        <a class="nav-link dropdown-toggle left" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Log in</a>
      </div>
    </nav>
<!-- menu bar -->
<br>
<div class="py-1 mb-2 nav-scroller">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-muted" href="#">Home</a>
          <a class="p-2 text-muted" href="#">Promotion</a>
          <a class="p-2 text-muted dropdown-toggle" href="#">Trade</a>
          <a class="p-2 text-muted dropdown-toggle" href="#">Rent</a>
          <a class="p-2 text-muted" href="#">Community</a>
          <a class="p-2 text-muted" href="#">Support</a>
        </nav>
      </div>
<title>Account</title>
</head>
<body>
  <!-- <div class="col-3"></div> -->
  <div class="container">
   <div class="container">
     <div class="container">
       <div class="knog">
    <div class="col-12">
        <div style="height:15px"> </div>
              <hr class="mb-4">
              <div style="height:15px"> </div>
              <h4 class="mb-3">Payment</h4>

              <div class="d-block my-3">
                <div class="custom-control custom-radio">
                  <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
                  <label class="custom-control-label" for="credit">Credit card</label>
                </div>
                <div class="custom-control custom-radio">
                  <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
                  <label class="custom-control-label" for="debit">Debit card</label>
                </div>
                <div class="custom-control custom-radio">
                  <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
                  <label class="custom-control-label" for="paypal">PayPal</label>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="cc-name">Name on card</label>
                  <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                  <small class="text-muted">Full name as displayed on card</small>
                  <div class="invalid-feedback">
                    Name on card is required
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="cc-number">Credit card number</label>
                  <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                  <div class="invalid-feedback">
                    Credit card number is required
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 mb-3">
                  <label for="cc-expiration">Expiration</label>
                  <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                  <div class="invalid-feedback">
                    Expiration date required
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                  <label for="cc-cvv">CVV</label>
                  <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                  <div class="invalid-feedback">
                    Security code required
                  </div>
                </div>
              </div>
              <hr class="mb-4">
              <button class="btn btn-success btn-lg btn-block" type="submit"><a href="index_home.php">Continue to checkout</a></button>
            </form>
          </div>
        </div>
</div>
</div>
</div>
</div>
<!-- <div class="col-3"></div> -->
</div>

      <div style="height:40px"> </div>
      <footer class="blog-footer">
            <p>Books Never Die. copyright <a href="#">© SIT-KMUTT</a> by <a href="#">DPJ</a> all rights reserved.</p>
            <p>
              <a href="#">Back to top</a>
            </p>
          </footer>

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    </body>
  </html>
