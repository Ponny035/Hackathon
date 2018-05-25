<?php
ini_set('display_errors', 1);
error_reporting(~0);

  session_start();
  $servername = "mysql.ilab.sit.kmutt.ac.th";
  $username = "std60130500219";
  $password = "DefR9300";
  $dbname = "std60130500219";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname );
  $_SESSION['message'] = '';

  if($_SERVER['REQUEST_METHOD']=='POST') {
    if($_POST['password'] == $_POST['confirmpassword']) {
        $username = $conn -> real_escape_string($_POST['username']);
        $email = $conn -> real_escape_string($_POST['e_mail']);
        $firstname = $conn -> real_escape_string($_POST['first_name']);
        $lastname = $conn -> real_escape_string($_POST['last_name']);
        $password = md5($_POST['password']); // encode
        $sql = "INSERT INTO login (user_name, password, first_name, last_name, e_mail) VALUES ('$username', '$password', '$firstname', '$lastname', '$email')";

        if ($conn->query($sql) === TRUE) {
          $_SESSION['message'] = 'Registration successful :) ';
          header("location: index.html");
        }
        else {
          $_SESSION['message'] = 'Registration fail :( ';
        }
    }
    else {
      $_SESSION['message'] = 'Password not match';
    }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="from.css" type="text/css">
    <div class="body-content">
      <div class="module">
        <h1>Create an account</h1>
        <form class="form" action="from.php" method="post" enctype="multipart/from-data" autocomplete="off">
          <div class="alert alert-error"></div>
          <input type="text" placeholder="User Name" name="username" required />
          <input type="email" placeholder="Email" name="e_mail" required />
          <input type="text" placeholder="First Name" name="first_name" required />
          <input type="text" placeholder="Last Name" name="last_name" required />
          <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
          <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />
          <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
        </form>
      </div>
    </div>
  </body>
</html>
