<?php
  require('db_con.php');
  ini_set('display_errors', 1);
  error_reporting(~0);

  session_start();

  $_SESSION['message'] = '';


  if($_SERVER['REQUEST_METHOD']=='POST') {
    if($_POST['password'] == $_POST['confirmpassword']) {
        $userName = mysqli_real_escape_string($conn, $_POST['username']);
        $password = password_hash($_POST['password'],PASSWORD_DEFAULT); // encode
        $firstName = mysqli_real_escape_string($conn, $_POST['first_name']);
        $lastName = mysqli_real_escape_string($conn, $_POST['last_name']);
        $phoneNumber = mysqli_real_escape_string($conn, $_POST['phone_number']);
        $Address = mysqli_real_escape_string($conn, $_POST['address']);
        $email = mysqli_real_escape_string($conn, $_POST['e_mail']);
        $coin = 0;
        $sql = "INSERT INTO user (user_name, password, first_name, last_name, phone_number, address, e_mail, coin) VALUES ('$userName', '$password', '$firstName', '$lastName','$phoneNumber','$Address','$email','$coin')";

        $query = mysqli_query($conn,$sql);
        //echo $query;

        if ($query === TRUE) {
          $_SESSION['message'] = 'Registration successful :) ';
          echo $_SESSION['message'];
          header("location: index.php");
        }
        else {
          $_SESSION['message'] = 'Registration fail :( ';
          echo $_SESSION['message'];
        }
    }
    else {
      $_SESSION['message'] = 'Password not match';
      echo $_SESSION['message'];
    }
  }
?>
