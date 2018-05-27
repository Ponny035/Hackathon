<?php
  require('db_con.php');
  ini_set('display_errors', 1);
  error_reporting(~0);
  session_start();
  $_SESSION['message'] = '';

	$sql = "SELECT * FROM user WHERE user_name = '".mysqli_real_escape_string($conn,$_POST['username'])."'
	and Password = '".mysqli_real_escape_string($conn,md5($_POST['password']))."'";
	$objQuery = mysqli_query($conn,$sql);
	$objResult = mysqli_fetch_array($objQuery);
	if(!$objResult)
	{
			echo "Username and Password Incorrect!";
	}
	else
	{
			$_SESSION["user_name"] = $objResult["user_name"];
      $_SESSION["user_name"] = $objResult["user_name"];
      $_SESSION["first_name"] = $objResult["first_name"];
      $_SESSION["last_name"] = $objResult["last_name"];
      $_SESSION["phone_number"] = $objResult["phone_number"];
      $_SESSION["address"] = $objResult["address"];

			session_write_close();
			header("location:account.php");

	}
	mysqli_close();
?>
