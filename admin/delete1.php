<?php
include('authentication.php');

include('DB/conf.php');

// if (empty($_SESSION['auth'])) {

//     echo "<script>window.location.href='index.php';</script>";
    
//   }
 $rol = $_SESSION['auth_user']['user_name'];
if(isset($_REQUEST['id']))
{

$id = $_REQUEST['id'];
$result = mysqli_query($conn,"DELETE  FROM usera WHERE id='$id'");
$sql1 = mysqli_query($conn,"INSERT INTO activity (date,name,action) VALUES (NOW(),'$rol','admin delete user id $id ')");

if($result){
    header('location:registered.php');
}
else{
    echo "error!";
}
}
?>