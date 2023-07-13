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

                    <h3 style="font--family:Bodoni MT Condensed;">If you do not have any account please <a href="Valid_user.php" class="btn btn-success">Register Here</a></h3>

                 </form>
             </div>


            </div>

        </div>
        </div>
    </div>
</div>




<!-- <?php 

include('include/footer.php');
?>  -->