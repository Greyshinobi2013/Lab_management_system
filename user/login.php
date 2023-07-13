<?php
session_start();
 include('DB/conf.php');
include('include/header.php');
if(isset($_SESSION['auth']))

{
      $_SESSION['status'] = "you are alreddy logged in ";
        header('location: index.php'); 
      exit(0);
}

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
                    <h5>Login Form</h5>

                </div>
            <div class="card-body">
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Enter code to register</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                         </div>
                      
                        <form action="valid_user.php" method="POST" class = "form-signin" role = "form">
			          <input type="text" name="student_id" class="form-control" placeholder="enter ID get from deparetment head ">
                     <input type="submit" name="submit" value="Proceed" class="btn btn-success">
                     </form>
                            
                        </div>
                    </div>
                    </div>
         
        
             <form action="logincode.php"method="POST">
                <div class="form-group">
                    <label for="">Email Id</label>
                    <input type="text"name="email" class="form-control"placeholder="email id "require >
                    </div>
                    <div class="form-group">
                    <label for="">Password</label>
                    <input type="password"name="password" class="form-control"placeholder="password "require >
                    </div>
                    <div class="form-group">
                      
        
                      <button type="submit"name="log_into" class="btn btn-primary btn-black" >Login</button>
                    </div>

                    </div>

                    
                 </form>
                </div>
                <h3 style="font-family:Bodoni MT Condensed;">If you do not have any account please<a href="valid_user.php"  
                        data-bs-toggle="modal" data-bs-target="#exampleModal"class="btn btn-primary btn-sm float-right">Register Here</a></h3>
            </div>
            




        </div>
        </div>
    </div>
</div>




<?php 

include('include/footer.php');
?>