<?php
include('authentication.php');

include('DB/conf.php');

if (empty($_SESSION['auth'])) {

    echo "<script>window.location.href='users.php';</script>";
    
  }
 $rol = $_SESSION['auth_user']['user_name'];
if(isset($_REQUEST['id']))
{

$id = $_REQUEST['id'];
$result = mysqli_query($conn,"DELETE  FROM admin WHERE id='$id'");
$sql1 = mysqli_query($conn,"INSERT INTO activity (date,name,action) VALUES (NOW(),'$rol','admin delete user id $id ')");

if($result){
    header('location:users.php');
}
else{
    echo "error!";
}
}
?>