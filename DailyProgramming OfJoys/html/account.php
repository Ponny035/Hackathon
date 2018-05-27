<?php
  require('db_con.php');
  ini_set('display_errors', 1);
  error_reporting(~0);
  session_start();

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="ys-Rent_Exchange.css">
    <link rel="stylesheet" href="account_style.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit:200,400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Averia+Serif+Libre" rel="stylesheet">


<!-- Navbar -->
    <nav class="site-header sticky-top py-1">
      <div class="container d-flex flex-column flex-md-row ">
        <div class="logo">
                    <img class="py image-edit logo-set2" src="https://i.imgur.com/LrIcfUC.png"></img>
                </div>
        <a class="py-2 logo-set" href="#">Books Never Die</a>
        <a class="py-2 left-2" href="#">Coins</a>
        <a class="nav-link dropdown-toggle left" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION["user_name"]; ?></a>
      </div>
    </nav>
<!-- menu bar  -->
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
    </br>
    <p>You Name : <?php echo $_SESSION["first_name"]; ?> </p>
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
