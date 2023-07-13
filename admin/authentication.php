<?php
session_start();
if(!isset($_SESSION['auth']) or $_SESSION['auth'] !="0")
{
$_SESSION['auth_status'] = "log in to access Dashboard";
header("location:login.php");
exit(0);
}
else
{
   
}
?>