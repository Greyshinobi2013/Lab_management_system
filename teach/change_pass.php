<?php
session_start();

 include('DB/conf.php');
include('include/header.php');


?>



<div class="section">
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-md-5 my 5">
                            
                <?php

                if(isset($_SESSION['auth_status']))
                {
                ?>

                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>ohh!</strong><?php echo $_SESSION['auth_status'];?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
                unset($_SESSION['auth_status']);
                }
                ?>
        <?php include('message.php');?>
            <div class="card my-5">
                <div class="card-header bg-light">
                    <h5>passwored change  Form</h5>

                </div>
            <div class="card-body">
    
             <form action="code.php"method="POST">
                <div class="form-group">
                    <label for="">old password</label>
                    <input type="password"name="opassword" class="form-control"placeholder="enter old password"require >
                    </div>
					<div class="form-group">
                    <label for="">new password</label>
                    <input type="password"name="npassword" class="form-control"placeholder="New paaword"require >
                    </div>
					<div class="form-group">
                    <label for="">coniform Password</label>
                    <input type="password"name="cpassword" class="form-control"placeholder="coniform password "require >
					</div>
               
                    <div class="form-group">
						<center>
                      
        
                      <button type="submit"name="change_password" class="btn btn-primary btn-black" >password change</button>
                    </div>
					</center>

                    </div>

                
                 </form>
             </div>


            </div>

        </div>
        </div>
    </div>
</div>




<?php 

include('include/footer.php');
?>