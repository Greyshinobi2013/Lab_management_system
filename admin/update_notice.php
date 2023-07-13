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
	if(isset($_POST['submit'])){
	$id = $_REQUEST['id'];
	
		$title = $_POST['title'];
		$message = $_POST['message'];
		$date = date_create();
		$time = date_format($date, 'Y-m-d H:i:s');
		
		$sql = "UPDATE `notice` SET `title`='$title',`message`='$message',`time`='$time' WHERE nid='$id'";
		$result = mysqli_query($conn,$sql);
		if($result){
            echo "<script>window.location.href='admin_notice.php';</script>";
		
	}else{
			echo "<div class='alert alert-danger'>";
            echo "<strong>Error!</strong> in submission. Please try again";
            echo "</div>";
	}
}
	


?>
  <section class ="content">
  <a href="admin_notice.php"class="btn btn-danger btn-sm float-right">Back</a>
  <div class="container">

	

    <div class="col-sm-10 col-sm-offset-2">
    
    <?php
        $id = $_REQUEST['id'];
        $sql1 = "SELECT * FROM notice WHERE nid='$id'";
         $result1 = mysqli_query($conn,$sql1);
         while($row = mysqli_fetch_array($result1)){
    
    ?>
        
        <form action="update_notice.php" method="post" class="form-horizontal" role="form">
    
    
                <div class="form-group">
                    <label for="title" class="col-sm-2 control-label">Notice Title:</label>
                    <div class="col-sm-7">
                    <input type="text" class="form-control" name="title" value="<?= $row['title']; ?>" >
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="message" class="col-sm-2 control-label">Detail Notice:</label>
                    <div class="col-sm-7">
                        <textarea class="form-control" rows="15" name="message" value="<?= $row['message']; ?>"></textarea>
                    </div>
                </div>
                <center><input type="submit" name="submit" value="Update" class="btn btn-primary"></center>
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