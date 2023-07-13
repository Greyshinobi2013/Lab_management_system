<?php 
include('authentication.php');
include('DB/conf.php');
include('include/header.php');
include('include/topnav.php');
include('include/sidbar.php');
?>
<div class="content-wrapper">
     <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">NOTICE </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">notice from admin </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

  <!-- /.content-header -->
  <?php
	if(isset($_POST['update1'])){
	$id = $_REQUEST['id'];
	
		$name = $_POST['name'];
		$email = $_POST['email'];
		$rol_as = $_POST['rol_as'];
	
	
		
		$sql = "UPDATE `admin` SET `name`='$name',`email`='$email',`rol_as`='$rol_as'  WHERE id='$id'";
		$result = mysqli_query($conn,$sql);
		if($result){
            echo "<script>window.location.href='users.php';</script>";
		
	}else{
			echo "<div class='alert alert-danger'>";
            echo "<strong>Error!</strong> in submission. Please try again";
            echo "</div>";
	}
}
	


?>
  <section class ="content">
  <a href="users.php"class="btn btn-danger btn-sm float-right">Back</a>
  <div class="container">

	

    <div class="col-sm-10 col-sm-offset-2">
    
    <?php
        $id = $_REQUEST['id'];
        $sql1 = "SELECT * FROM admin WHERE id='$id'";
         $result1 = mysqli_query($conn,$sql1);
         while($row = mysqli_fetch_array($result1)){
    
    ?>
        
        <form action="update_user.php" method="post" class="form-horizontal" role="form">
    
    
                <div class="form-group">
                    <label for="title" class="col-sm-2 control-label">User Name:</label>
                    <div class="col-sm-7">
                    <input type="text" class="form-control" name="name" value="<?= $row['name']; ?>" >
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">User Email:</label>
                    <div class="col-sm-7">
                    <input type="text" class="form-control" name="email" value="<?= $row['email']; ?>" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">User roll:</label>
                    <div class="col-sm-7">
                    <input type="text" class="form-control" name="rol_as" value="<?= $row['rol_as']; ?>" >
                    </div>
                </div>
              
                <center><input type="submit" name="update1" value="Update" class="btn btn-primary"></center>
                <input type="hidden" name="id" value="<?=$id;?>" />
                
        </form>
        <br>
            <br>
        
    </div>
    <?php
        }
      
         ?>
                                        
                                
                                </div>
                            </div>
                        </div>

                    </div>
                 </div>
             </div>
         </div>
   
</section>
          

                      

</div>

      
<?php include('include/script.php');?>
<?php include('include/footer.php');?>