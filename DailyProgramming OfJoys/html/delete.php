<?php
  require('db_con.php');
  ini_set('display_errors', 1);
  error_reporting(~0);
  session_start();

  $sql = "DELETE FROM user WHERE user_name = '".$_SESSION["user_name"]."'";
  mysqli_query($conn, $sql);
  session_destroy();
  header("location:index.php");

?>
