<?php
  require('db_con.php');
  ini_set('display_errors', 1);
  error_reporting(~0);
  session_start();
  $_SESSION['message'] = '';
  if(!isset($_SESSION["user_name"])) {
    $sql = "SELECT * FROM user WHERE user_name = '".$_POST["username"]."'";
    $objQuery = mysqli_query($conn,$sql);
    $objResult = mysqli_fetch_array($objQuery);
    if(!password_verify($_POST['password'],$objResult['password'])) {
	      echo "Username and Password Incorrect!";
	   }
     else {
         $_SESSION["user_name"] = $objResult["user_name"];
         $_SESSION["first_name"] = $objResult["first_name"];
         $_SESSION["last_name"] = $objResult["last_name"];
         $_SESSION["phone_number"] = $objResult["phone_number"];
         $_SESSION["address"] = $objResult["address"];
         $_SESSION["e_mail"] = $objResult["e_mail"];
         $_SESSION["coin"] = $objResult["coin"];
         session_write_close();
         header("location:index_home.php");

	  }
  }
  else {
    header("location:index_home.php");
  }
	mysqli_close($conn);
?>
