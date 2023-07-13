<?php
	include('DB/conf.php');
	session_start();
?>

<div class="container-fluid">
   <div class="row" id="wrapper">
 
      <div class="col-md-6">
	  <br><br>
	  <h2 style="font-family:Bernard MT Condensed; color:#06857C;">Register User Account</h2>
         <div class="panel panel-primary">
            <div class="panel-heading">
               <h3 class="panel-title">
                  Register
               </h3>
            </div>
            <div class="panel-body">

            <?php
			$isOk = false;
            if(isset($_POST['submit'])){
            	$student_id = $_POST['student_id'];
            	$sql_id = "SELECT roll1 FROM student";
				$result_id = mysqli_query($conn,$sql_id);
				
				while($row_id = mysqli_fetch_array($result_id)){
					$sid = $row_id['roll1'];

					if($sid == $student_id){
						$isOk = true;
						$_SESSION['verified']= true;
						header('Location:register.php');
					}
			}
			if(!$isOk){
				$_SESSION['auth_status']="registeration code is invalid please try again";
				header('Location:login.php');
			}
				
					
		
	}


            ?>

            

         </div>
      </div>
   </div>
</div>
</div>