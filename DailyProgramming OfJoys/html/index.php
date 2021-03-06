<?php
  session_start();
  if($_SESSION["user_name"]!=null) {
    header("location:index_home.php");
  }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="floating-labels.css">

    <title>Login</title>
  </head>
  <body>

    <form class="form-signin" action="login.php" method="post" enctype="multipart/from-data" autocomplete="off">
      <div class="text-center mb-4">
        <h1 class="h3 mb-3 font-weight-normal">Welcome Book Lovers</h1>
        <p> <code>Let's</code> Exchange knowledge, exchange book</p>
      </div>

      <div class="form-label-group">
        <input type="Username" id="inputUsername" class="form-control" placeholder="Username" name="username" required="" autofocus="">
        <label for="inputUsername">Username</label>
      </div>

      <div class="form-label-group">
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required="">
        <label for="inputPassword">Password</label>
      </div>

      <div class="checkbox mb-3">
        <div>
          <input type="checkbox" value="remember-me" class="txt2"> Remember me <a href="register.html" class="txt1">Do not have an account?</a>

            </div>

      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" href="account.html" name"login" >Sign in</button>
      <p class="mt-5 mb-3 text-muted text-center">© Daily Programming of Joy (DPJ) </p>
    </form>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>
