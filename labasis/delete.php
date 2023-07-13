<?php
include('authentication.php');

include('DB/conf.php');

if (empty($_SESSION['auth'])) {

    echo "<script>window.location.href='index.php';</script>";
    
  }
 $rol = $_SESSION['auth_user']['user_name'];
if(isset($_REQUEST['id']))
{
$id = $_REQUEST['id'];
$result = mysqli_query($conn,"DELETE FROM stdevice WHERE Did='$id'");
$sql1 = mysqli_query($conn,"INSERT INTO activity (date,name,action) VALUES (NOW(),'$rol',' lab Asistant delete device id $id ')");

if($result){
    header('location:lab_device.php');
}
else{
    echo "error!";
}
}
?>