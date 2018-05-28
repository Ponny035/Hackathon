<?php
  require('db_con.php');
  ini_set('display_errors', 1);
  error_reporting(~0);

  session_start();

  $_SESSION['message'] = '';

  $sql = "SELECT password FROM user WHERE user_name = '".$_SESSION["user_name"]."'";
  $objQuery = mysqli_query($conn,$sql);
  $objResult = mysqli_fetch_array($objQuery);
  var_dump($_POST['confirmpassword']);
  var_dump($objResult['password']);
  if(!password_verify($_POST['confirmpassword'],$objResult['password'])) {
      echo "Password Incorrect!";
   }
   else {
     $userName = $_SESSION["user_name"];
     $password = $objResult['password'];
     $firstName = mysqli_real_escape_string($conn, $_POST['first_name']);
     $lastName = mysqli_real_escape_string($conn, $_POST['last_name']);
     $phoneNumber = mysqli_real_escape_string($conn, $_POST['phone_number']);
     $Address = mysqli_real_escape_string($conn, $_POST['address']);
     $email = mysqli_real_escape_string($conn, $_POST['e_mail']);
     $coin = $_SESSION["coin"];
     $sql = "REPLACE INTO user (user_name, password, first_name, last_name, phone_number, address, e_mail, coin) VALUES ('$userName', '$password','$firstName', '$lastName','$phoneNumber','$Address','$email','$coin')";
     $query = mysqli_query($conn,$sql);
     //echo $query;
     if ($query === TRUE) {
       $_SESSION['message'] = 'Registration successful :) ';
       $_SESSION["first_name"] = $firstName;
       $_SESSION["last_name"] = $lastName;
       $_SESSION["phone_number"] = $phoneNumber;
       $_SESSION["address"] = $Address;
       $_SESSION["e_mail"] = $email;
       $_SESSION["coin"] = $coin;
       header("location: account.php");
     }

  }
?>
