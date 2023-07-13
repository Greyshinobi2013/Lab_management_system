<?php

include('DB/conf.php');

	if (isset($_REQUEST['id']))
	 {
	 $id = $_REQUEST['id'];
	 
	 $result = mysqli_query($conn,"DELETE FROM notice WHERE nid='$id'"); 
	 if($result){
	 
	 header('Location:admin_notice.php');
	}else{
		echo "error!";
	 }
	}
?>
