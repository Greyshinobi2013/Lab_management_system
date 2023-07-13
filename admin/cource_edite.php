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
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">course Edite</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

  <!-- /.content-header -->
<section class ="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                              <?php 
                            if(isset($_SESSION['status'])){

                    echo "<h4>".$_SESSION['status']. "</h4>";
                    unset($_SESSION['status']);
                    }

                    ?>
          
                   <div class="card">
                       <div class="card-header">
                         <h3 class="card-title">update course  </h3>
                         <a href="insert_course.php"class="btn btn-danger btn-sm float-right">Back</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form action="code.php"method="POST">
                                    <div class="modal-body">
                            <div class="form-group">
    <?php
            $id2 = $_REQUEST['id'];

            $ott="SELECT * from course where co_id='$id2'";
            $res = mysqli_query($conn,$ott);
              while($row = mysqli_fetch_array($res))
          

            {
              ?>
          
                  <div class="form-group">
                <label for="">Course Code</label>
            <input type = "text" name="course_code" value="<?php echo  $row['course_code']?> "class ="form-control" >
            </div>

          
        
                <div class="form-group">
                    <label for="">Course Name</label>
                    <input type = "text" name="course_name" value="<?php echo $row['course_name']?> " class ="form-control" >
                </div>
                <div class="form-group">
                    <label for="">taken year</label>
                <input type = "text" name="year" value="<?php echo  $row['year']?> "class ="form-control" >
                </div>
                <div class="form-group">
                    <label for="">course Credit</label>
                <input type = "text" name="credit" value="<?php echo  $row['credit']?> "class ="form-control" >
                </div>
                
                
                                            
                                            <?php
                                        }

                             
                              
                         
                          
                                ?>
                                
                                           
                                    <div class="modal-footer">
                                     
                                        <button type="submit"name="Update" class="btn btn-primary">update</button>
                                        <input type="hidden" name ="id"value = "<?= $id2;?> "/>
                                     
                                    </div>
                            </form>


                                        
                                   
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


