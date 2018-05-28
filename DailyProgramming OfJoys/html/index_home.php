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
    <link rel="stylesheet" href="index_home_style.css">
    <link rel="stylesheet" href="account_style.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit:200,400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Averia+Serif+Libre" rel="stylesheet">


<!-- Navbar -->
    <nav class="site-header sticky-top py-1">
      <div class="container d-flex flex-column flex-md-row ">
        <div class="logo right">
                    <img class="py image-edit logo-set2" src="https://i.imgur.com/LrIcfUC.png"></img>
                </div>
                <a class="py-2 logo-set" href="index_home.php">Books Never Die</a>
                <a class="py-2 left-2" href="coin.html">Coins: </a>
                <a class="py-2 left-3" href=""> <?php echo $_SESSION["coin"]; ?></a>
                <a class="py-2 left-2" href="account.html"><?php echo $_SESSION["user_name"]; ?></a>
              </div>
    </nav>
<!-- menu bar -->
<br>
<div class="py-1 mb-2 nav-scroller">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-muted" href="index_home.php">Home</a>
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
  <section class="">
  <div class="">
    <img class="left-pic" style="height: 100%; width: 100%; display: block;" src="https://i.imgur.com/AuqMhLF.jpg">
  </div>
</section>

<div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="https://i.imgur.com/7wPp4Sk.jpg" data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">
                    <span class="badge badge-success">Rent</span>
                    One of Us Is Lying is the story of what happens when five strangers walk into detention and only four walk out alive. Everyone is a suspect, and everyone has something to hide. </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-success">View</button>
                      <button type="button" class="btn btn-sm btn-outline-danger">♡</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="https://i.imgur.com/3YUVt7U.jpg" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                <div class="card-body">
                  <p class="card-text">
                    <span class="badge badge-danger">Trade</span>
                    a powerful romance blooms between seventeen-year-old Elio and his father's house guest, Oliver. Unrelenting currents of obsession and fear, fascination and desire threaten to overwhelm the lovers</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-success">View</button>
                      <button type="button" class="btn btn-sm btn-outline-danger">♡</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="https://i.imgur.com/OJ3TrHH.jpg" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                <div class="card-body">
                  <p class="card-text">
                    <span class="badge badge-success">Rent</span>
                    Choices. Seventeen-year-old Mia is faced with some tough ones: Stay true to her first love—music—even if it means losing her boyfriend and leaving her family </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-success">View</button>
                      <button type="button" class="btn btn-sm btn-outline-danger">♡</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="https://i.imgur.com/JV5ITvb.jpg" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                <div class="card-body">
                  <p class="card-text">
                    <span class="badge badge-danger">Trade</span>
                    Elisa Esposito—mute her whole life, orphaned as a child—is struggling with her humdrum existence as a janitor working the graveyard shift at Baltimore’s Occam Aerospace Research Center.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-success"><a href="Trade_Exchange.html" >View </a></button>
                      <button type="button" class="btn btn-sm btn-outline-danger">♡</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="https://i.imgur.com/iwS3Dky.jpg" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                <div class="card-body">
                  <p class="card-text">
                    <span class="badge badge-success">Rent</span>
                    'I love you, SIMON. I LOVE YOU! And I love this fresh, funny, live-out-loud book." Jennifer Niven, bestselling author of All the Bright Places</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-success"><a href="Rent_Exchange.html" >View</a></button>
                      <button type="button" class="btn btn-sm btn-outline-danger">♡</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="https://i.imgur.com/JD4qQ7C.jpg" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                <div class="card-body">
                  <p class="card-text">
                    <span class="badge badge-success">Rent</span>
                    New York Times bestselling biography of Apple co-founder Steve Jobs.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-success">View</button>
                      <button type="button" class="btn btn-sm btn-outline-danger">♡</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>


            </div>
          </div>
        </div>
      </div>


      <div style="height: 20px"> </div>





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
